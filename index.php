<?php

if (empty($_GET['file'])) {
	ob_start(function($s) {
		return preg_replace_callback('#(<(link|script)\s[^>]*(href|src)=")(adminer\.css|static/.+)"#U', function($m) {
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

	$types = array('css' => 'text/css', 'js' => 'text/javascript', 'gif' => 'image/gif', 'png' => 'image/png');
	if (isset($types[$m[3]])) {
		header('Content-Type: ' . $types[$m[3]]);
	}
	@readfile(__DIR__ . '/' . $_GET['file']);
	exit;
}


function adminer_object() {
	include_once dirname(__FILE__) . '/plugins/plugin.php';

	foreach (glob(dirname(__FILE__) . '/plugins/*.php') as $filename) {
		include_once $filename;
	}

	$plugins = array(
		new AdminerDisableJush,
		new AdminerAutocomplete,
		new AdminerSaveMenuPos,
	);

	return new AdminerPlugin($plugins);
}

include dirname(__FILE__) . '/adminer.php';
