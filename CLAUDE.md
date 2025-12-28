# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Composer package `dg/adminer` — a customized distribution of [Adminer](https://www.adminer.org) with custom plugins and UI for the Nette ecosystem. Not a standalone application; users install via `composer require dg/adminer` and create a wrapper `index.php`.

## Architecture

### Entry Point (`index.php`)

Dual purpose: serves static assets (CSS/JS) via `?file=...&version=N` query parameters with cache headers, and loads the core `adminer.php` binary.

Asset URLs are rewritten on-the-fly using output buffering — `ASSETS_VERSION` constant controls cache busting.

### Plugin Loading Chain

```
index.php → adminer.php (core binary) → adminer-plugins.php → private.php (returns plugin instance array)
```

- Plugins live in `adminer-plugins/` — each is a PHP class prefixed with `Adminer` (e.g., `AdminerSqlWizard`)
- Plugins hook into Adminer's extension points via method names: `head()`, `csp()`, `login()`, `loginForm()`, `dumpFormat()`, `dumpHeaders()`, `dumpTable()`, `dumpData()`, `syntaxHighlighting()`, `tablesPrint()`, `backwardKeys()`, `backwardKeysPrint()`
- Active plugins are instantiated in `private.php` and returned as an array
- `private.php` also holds API keys (e.g., OpenAI key for sql-wizard)

### Frontend Code

No build system. All assets are pre-built and committed:
- JavaScript is embedded inline in plugin PHP files using `<script<?= Adminer\nonce() ?>>` for CSP compliance
- PHP data is passed to JS via `json_encode()`
- ACE editor bundles in `static/ace/`, Prism.js in `static/`
- Custom CSS in `adminer.css` (standard CSS, no preprocessors)

### Key Cross-File Interactions

- `autocomplete.php` replaces the standard `.sqlarea` textarea with an ACE editor and monkey-patches the `value` property for transparent form integration
- `sql-wizard.php` prepends a prompt textarea + button before the `.sqlarea` form element and writes generated SQL into it — this interacts with the ACE editor override from `autocomplete.php`
- `remoteColor.php` adds CSS class `remote` to `<html>` element; `adminer.css` styles `.remote` with a red top border
- `dump-php-prototype.php` and `dump-json.php` register custom export formats via `dumpFormat()` / `dumpHeaders()` / `dumpTable()` / `dumpData()` hooks

## Development Workflow

No automated tests. Manual testing only:
1. Create a wrapper `index.php` in a test project pointing to this package
2. Open Adminer in browser and test database operations

To add a new plugin:
1. Create `adminer-plugins/new-feature.php` with class `AdminerNewFeature`
2. Add `new AdminerNewFeature()` to the array in `private.php`

## Coding Conventions

Follow existing patterns in `adminer-plugins/`. Key points:
- Class name: `AdminerFeatureName`
- Inline JS/CSS in PHP files using `Adminer\nonce()` for CSP
- Use `json_encode()` to pass PHP data to JavaScript
- CSS targets Adminer's existing DOM structure

## Commit Message Style

- Plugin changes: `sql-wizard: updated model`
- Core updates: `update to Adminer 5.4.1`
- CSS changes: `css tweaks`
- WIP: `wip`
