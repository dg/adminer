/*
 * jQuery textarea suggest plugin
 *
 * Copyright (c) 2009-2010 Roman Imankulov
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Requires:
 *   - jQuery (tested with 1.3.x and 1.4.x)
 *   - jquery.a-tools >= 1.4.1 (http://plugins.jquery.com/project/a-tools)
 */

/*globals jQuery,document */

(function ($) {
    $.asuggestKeys = {
        UNKNOWN: 0,
        SHIFT: 16,
        CTRL: 17,
        ALT: 18,
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        DOWN: 40,
        DEL: 46,
        TAB: 9,
        RETURN: 13,
        ESC: 27,
        COMMA: 188,
        PAGEUP: 33,
        PAGEDOWN: 34,
        BACKSPACE: 8,
        SPACE: 32
    };
    $.asuggestFocused = null;
    $.lastSuggestion = '';

    $.fn.asuggest = function (suggests, options) {
        return this.each(function () {
            $.makeSuggest(this, suggests, options);
        });
    };

    $.fn.asuggest.defaults = {
        'delimiters': '\n ',
        'minChunkSize': 1,
        'cycleOnTab': true,
        'autoComplete': true,
        'endingSymbols': ' ',
        'stopSuggestionKeys': [$.asuggestKeys.RETURN, $.asuggestKeys.SPACE],
        'ignoreCase': false
    };

    /* Make suggest:
     *
     * create and return jQuery object on the top of DOM object
     * and store suggests as part of this object
     *
     * @param area: HTML DOM element to add suggests to
     * @param suggests: The array of suggest strings
     * @param options: The options object
     */
    $.makeSuggest = function (area, suggests, options) {
        options = $.extend({}, $.fn.asuggest.defaults, options);

        var KEY = $.asuggestKeys,
            $area = $(area);
        $area.suggests = suggests;
        $area.options = options;

        /* Internal method: get the chunk of text before the cursor */
        $area.getChunk = function () {
            var delimiters = this.options.delimiters.split(''), // array of chars
                textBeforeCursor = this.val().substr(0, this.getSelection().start),
                indexOfDelimiter = -1,
                i,
                d,
                idx;
            for (i = 0; i < delimiters.length; i++) {
                d = delimiters[i];
                idx = textBeforeCursor.lastIndexOf(d);
                if (idx > indexOfDelimiter) {
                    indexOfDelimiter = idx;
                }
            }
            if (indexOfDelimiter < 0) {
                return textBeforeCursor;
            } else {
                return textBeforeCursor.substr(indexOfDelimiter + 1);
            }
        };

        /* Internal method: get completion.
         * If performCycle is true then analyze getChunk() and and getSelection()
         */
        $area.getCompletion = function (performCycle) {
            var text = this.getChunk(),
                selectionText = this.getSelection().text,
                suggests = performCycle < 0 ? this.suggests.slice(0).reverse() : this.suggests,
                foundAlreadySelectedValue = false,
                i,
                suggest;
            $.lastSuggestion = '';

            // search the variant
            for (i = 0; i < suggests.length; i++) {
                suggest = suggests[i];
                if ($area.options.ignoreCase) {
                    suggest = suggest.toLowerCase();
                    text = text.toLowerCase();
                    selectionText = selectionText.toLowerCase();
                }
                // some variant is found
                if (suggest.indexOf(text) === 0) {
                    if (performCycle) {
                        if (text + selectionText === suggest) {
                            foundAlreadySelectedValue = true;
                        } else if (foundAlreadySelectedValue) {
                            $.lastSuggestion = suggests[i];
                            break;
                        } else if ($.lastSuggestion === '') {
                            $.lastSuggestion = suggests[i];
                        }
                    } else {
                        $.lastSuggestion = suggests[i];
                        break;
                    }
                }
            }
            return $.lastSuggestion.substr(text.length);
        };

        $area.updateSelection = function (completion) {
            if (completion) {
                var _selectionStart = $area.getSelection().start,
                    _selectionEnd = _selectionStart + completion.length;
                if ($area.getSelection().text === "") {
                    if ($area.val().length === _selectionStart) { // Weird IE workaround, I really have no idea why it works
                        $area.setCaretPos(_selectionStart + 10000);
                    }
                    $area.insertAtCaretPos(completion);
                } else {
                    $area.replaceSelection(completion);
                }
                $area.setSelection(_selectionStart, _selectionEnd);
            }
        };

        $area.keydown(function (e) {
            if (e.keyCode === KEY.TAB) {
                if ($area.options.cycleOnTab) {
                    var chunk = $area.getChunk();
                    if (chunk.length >= $area.options.minChunkSize) {
                        $area.updateSelection($area.getCompletion(e.shiftKey ? -1 : 1));
                    }
                    e.preventDefault();
                    e.stopPropagation();
                    $area.focus();
                    $.asuggestFocused = this;
                    return false;
                }
            }
            // Check for conditions to stop suggestion
            if ($area.getSelection().length &&
                    $.inArray(e.keyCode, $area.options.stopSuggestionKeys) !== -1) {
                // apply suggestion. Clean up selection and insert a space
                var endingSymbols = (e.keyCode === KEY.RETURN ? $area.options.endingSymbols : '');
                var _selectionEnd = $area.getSelection().end;
                var _text = $.lastSuggestion + endingSymbols;
                $area.setSelection(_selectionEnd - $.lastSuggestion.length, _selectionEnd);
                $area.replaceSelection(_text);
                _selectionEnd = $area.getSelection().end;
                $area.setSelection(_selectionEnd, _selectionEnd);
                e.stopPropagation();
                this.focus();
                $.asuggestFocused = this;
                if (e.keyCode === KEY.RETURN) {
                    e.preventDefault();
                }
            }
        });

        $area.keyup(function (e) {
            var hasSpecialKeys = e.altKey || e.metaKey || e.ctrlKey,
                hasSpecialKeysOrShift = hasSpecialKeys || e.shiftKey;
            switch (e.keyCode) {
            case KEY.UNKNOWN: // Special key released
            case KEY.SHIFT:
            case KEY.CTRL:
            case KEY.ALT:
            case KEY.RETURN: // we don't want to suggest when RETURN key has pressed (another IE workaround)
                break;
            case KEY.TAB:
                if (!hasSpecialKeysOrShift && $area.options.cycleOnTab) {
                    break;
                }
            case KEY.ESC:
            case KEY.BACKSPACE:
            case KEY.DEL:
            case KEY.UP:
            case KEY.DOWN:
            case KEY.LEFT:
            case KEY.RIGHT:
                if (!hasSpecialKeysOrShift && $area.options.autoComplete) {
                    $area.replaceSelection("");
                }
                break;
            default:
                if (!hasSpecialKeys && $area.options.autoComplete) {
                    var chunk = $area.getChunk();
                    if (chunk.length >= $area.options.minChunkSize) {
                        $area.updateSelection($area.getCompletion(false));
                    }
                }
                break;
            }
        });
        return $area;
    };
}(jQuery));
