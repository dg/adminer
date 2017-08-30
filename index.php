<?php

if (empty($_GET['file'])) {
	ob_start(function ($s) {
		return preg_replace_callback('#(<(link|script)\s[^>]*(href|src)=")(adminer\.css|static/.+)"#U', function ($m) {
			return $m[1] . '?file=' . urlencode($m[4]) . '"';
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
		new AdminerDumpPhpPrototype,
	];

	return new AdminerPlugin($plugins);
}


include __DIR__ . '/adminer.php';
