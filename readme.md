Adminer Customization
=====================

Customizations for [Adminer](https://www.adminer.org), the best database management tool written in PHP.

- clean design
- visual resolution for production/development servers
- SQL autocomplete plugin
- plugin that dumps to PHP code
- plugin that saves menu scroll position


Installation
------------

```
composer require dg/adminer-custom
```

Create file `index.php` somewhere in your document root, for example in subdirectory `adminer/`:

```php
<?php
touch(__DIR__ . '/adminer.css');
require __DIR__ . '/../../vendor/dg/adminer-custom/index.php'; // CHECK THAT PATH IS CORRECT
```

And then navigate your browser to this directory (i.e. `http://localhost/adminer`).


Screenshots
-----------

### Login page

![login page](http://dg.github.io/adminer-custom/images/screenshot1.png)

### Tables overview

![tables overview](http://dg.github.io/adminer-custom/images/screenshot2.png)

### Red top border indicates production server

![production server](http://dg.github.io/adminer-custom/images/screenshot3.png)

### Use `tab` for autocomplete

![autocomplete](http://dg.github.io/adminer-custom/images/screenshot4.png)

### Export as PHP code for [Nette Database](https://github.com/nette/database)

![export](http://dg.github.io/adminer-custom/images/screenshot5.png)
![export](http://dg.github.io/adminer-custom/images/screenshot6.png)
