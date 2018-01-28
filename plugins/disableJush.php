<?php

/**
 * Disables JUSH in textarea.
 * @author David Grudl
 * @license BSD
 */
class AdminerDisableJush
{
	public function head()
	{
		?>
<script<?php echo nonce();?> type="text/javascript">
(function(){
	var origBodyLoad = bodyLoad,
		tags = document.getElementsByTagName('textarea');

	bodyLoad = function(version) {
		for (var i = 0; i < tags.length; i++) {
			tags[i].className = tags[i].className.replace(/\bjush-\S+/, '');
		}
		return origBodyLoad.apply(window, arguments);
	}
})();
</script>
<?php
	}
}
