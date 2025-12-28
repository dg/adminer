# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **Composer package** that provides a customized distribution of [Adminer](https://www.adminer.org) - a lightweight PHP database management tool. The package adds custom plugins and UI enhancements specifically designed for the Nette ecosystem and modern PHP development workflows.

**Not a standalone application** - this is distributed via Composer as `dg/adminer` and requires users to create a wrapper `index.php` file in their project.

## Architecture

### Entry Point and Asset System

The `index.php` file serves dual purposes:
1. **Asset server**: Serves CSS/JS files with cache busting via `?file=...&version=N` query parameters
2. **Plugin loader**: Includes the core `adminer.php` binary and loads custom plugins

Asset versioning is handled automatically via output buffering - all asset URLs are rewritten on-the-fly to include version parameters.

### Plugin System

**Plugin loading chain:**
```
adminer.php (core)
  → adminer-plugins.php
    → private.php (returns array of plugin instances)
```

**All plugins live in `adminer-plugins/` directory:**
- Each plugin is a PHP class prefixed with `Adminer` (e.g., `AdminerSqlWizard`)
- Plugins hook into Adminer's extension points via specific method names (`head()`, `csp()`, etc.)
- Active plugins are instantiated in `private.php` and returned as an array

**To add a new plugin:**
1. Create `adminer-plugins/new-feature.php` with class `AdminerNewFeature`
2. Add `new AdminerNewFeature()` to the array in `private.php`

### Key Plugins

**sql-wizard.php** (296 lines)
- AI-powered SQL generation using OpenAI API
- Streams responses for real-time query generation
- Injects UI via `head()` method - adds textarea + button before SQL editor
- Currently uses GPT-5.2 model
- API key configured in `private.php` (security concern - see below)

**autocomplete.php** (121 lines)
- Integrates ACE editor for SQL syntax highlighting and autocomplete
- Loads ACE from `static/ace/` directory
- Sets up table/column name completion from database schema
- Replaces standard textarea with 500px ACE editor instance

**dump-php-prototype.php** (249 lines)
- Exports database tables as PHP code for Nette Database/Forms
- Generates entity classes with property annotations
- Creates form definitions matching database schema

**backward-keys.php** (55 lines)
- Fixes foreign key relationship display issues
- Handles edge cases in Adminer's relationship detection

**remoteColor.php**, **saveMenuPos.php**, **tables-filter.php**
- UI enhancements for production/dev visual distinction and UX improvements

## Development Workflow

### No Build System

This is a **distribution package** - all assets are pre-built and committed:
- ACE editor bundles in `static/ace/`
- Custom CSS in `adminer.css` (655 lines, handwritten)
- Plugin JavaScript embedded in PHP files (see `sql-wizard.php` lines 56-293)

**To modify frontend code:**
1. Edit CSS directly in `adminer.css`
2. Edit JavaScript inline within plugin PHP files
3. Test by refreshing browser (cache busting handles versioning)

### Testing

**No automated tests exist.** Testing is manual:
1. Create a wrapper `index.php` in a test project
2. Point to this package: `require __DIR__ . '/vendor/dg/adminer/index.php';`
3. Navigate to the Adminer interface in browser
4. Test database operations manually

### Key Files to Know

- `adminer.php` (492 KB) - The core Adminer binary (updated periodically from upstream)
- `adminer.css` (36 KB) - Custom stylesheet overriding Adminer defaults
- `private.php` - Plugin configuration (instantiates active plugins)
- `index.php` - Entry point with asset serving and cache headers

## Database Support

Supports all Adminer-compatible databases:
- MySQL/MariaDB
- PostgreSQL
- SQLite
- MSSQL
- Oracle
- MongoDB
- Elasticsearch

## Security Considerations

### API Key Management

The `private.php` file is used to store API keys:

```php
return [
    new AdminerSqlWizard('sk-xxxxx'),
];
```

### Auto-login Feature

The `login-without-credentials.php` plugin enables passwordless login via environment variables:
- `ADMINER_SERVER`
- `ADMINER_USERNAME`
- `ADMINER_PASSWORD`

**Only use in non-public environments** (localhost, Docker dev containers, etc.)

## Coding Conventions

### Plugin Development

Follow existing patterns from `adminer-plugins/` directory:

**Class naming:**
```php
class AdminerFeatureName
{
    // Adminer calls these methods if they exist
    public function head() { }       // Inject HTML/JS in <head>
    public function csp() { }        // Modify Content Security Policy
    public function loginForm() { }  // Customize login page
}
```

**Frontend code in plugins:**
- Embed JavaScript/CSS directly in PHP using heredoc or inline echo
- Use `<?= Adminer\nonce() ?>` for CSP-compliant inline scripts
- Use `json_encode()` to pass PHP data to JavaScript safely

**Example from sql-wizard.php:**
```php
public function head()
{
    // PHP processing
    $data = get_database_structure();
    ?>
    <script<?= Adminer\nonce() ?>>
    const model = {
        data: <?= json_encode($data) ?>,
        // ... JavaScript code
    };
    </script>
    <?php
}
```

### CSS Styling

**File:** `adminer.css`

- Uses standard CSS (no preprocessors)
- Targets Adminer's existing DOM structure
- Focus on clean, minimal design
- Red top border indicates production servers (see `remoteColor.php`)

## Common Tasks

## Integration with Nette Projects

This package is designed for Nette framework users:

**Export features:**
- Dump to Nette Database code (generates `ActiveRow` subclasses)
- Dump to Nette Forms code (generates form field definitions)

**Code style:**
- Follows Nette ecosystem conventions
- Compatible with Nette Database Explorer
- Integrates with Nette Forms

## Commit Message Style

Based on git history, follow these patterns:
- Feature updates: `sql-wizard: model gpt-5.2`
- Core updates: `update to Adminer 5.4.1`
- WIP commits: `wip` (for incomplete work)
- CSS changes: `css tweaks`
- Plugin changes: `[plugin-name]: [description]`

## Distribution

**Package name:** `dg/adminer`
**Repository:** https://github.com/dg/adminer
