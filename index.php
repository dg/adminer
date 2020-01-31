<?php

// Redirect to HTTPS if HTTPS_REDIRECT is defined in environment variables
if (getenv('ADMINER_HTTPS_REDIRECT') === 'true' && (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off')) {
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	exit();
}

define('ASSETS_VERSION', '1');

if (empty($_GET['file'])) {
	ob_start(function ($s) {
		return preg_replace_callback('#(<(link|script)\s[^>]*(href|src)=")(adminer\.css|static/.+)(\?v=\d+)?"#U', function ($m) {
			return $m[1] . '?file=' . urlencode($m[4]) . '&amp;version=' . ASSETS_VERSION . '"';
		}, $s);
	}, 4096);

} elseif (preg_match('#^(default|adminer|static(/\w[\w.-]*)+)\.(\w+)\z#', $_GET['file'], $m)) {
	if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
		header('HTTP/1.1 304 Not Modified');
		exit;
	}

	header('Expires: ' . gmdate('D, d M Y H:i:s', strtotime('1 month')) . ' GMT');
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');

	$types = ['css' => 'text/css', 'js' => 'text/javascript', 'gif' => 'image/gif', 'png' => 'image/png'];
	if (isset($types[$m[3]])) {
		header('Content-Type: ' . $types[$m[3]]);
	}
	@readfile(__DIR__ . '/' . $_GET['file']);
	exit;
}

function adminer_object()
{
	include_once __DIR__ . '/plugins/plugin.php';

	foreach (glob(__DIR__ . '/plugins/*.php') as $filename) {
		include_once $filename;
	}

	$plugins = [
		new AdminerDisableJush,
		new AdminerAutocomplete,
		new AdminerSaveMenuPos,
		new AdminerRemoteColor,
		new AdminerDumpJson,
		new AdminerDumpPhpPrototype,
		new AdminerTablesFilter,
	];


	if (getenv('ADMINER_SERVER') && getenv('ADMINER_USERNAME')) {
		if (!isset($_GET['username'])) {
			$_GET['username'] = '';
		}

		class AdminerCustomization extends AdminerPlugin
		{
			function credentials()
			{
				$server = getenv('ADMINER_SERVER');
				$username = getenv('ADMINER_USERNAME');
				$password = getenv('ADMINER_PASSWORD');
				return [$server, $username, $password];
			}
		}

		return new AdminerCustomization($plugins);
	}

	return new AdminerPlugin($plugins);
}

include __DIR__ . '/adminer.php';
