<?php

/**
 * Adds a red warning strip when working on remote/production servers
 * @author David Grudl
 * @license BSD
 */
class AdminerRemoteColor
{
	public function head()
	{
		$localhosts = ['127.0.0.1', '::1', 'localhost'];
		$connection = Adminer\connection();
		if (
			(isset($_SERVER['HTTP_X_FORWARDED_FOR']) || !isset($_SERVER['REMOTE_ADDR']) || !in_array($_SERVER['REMOTE_ADDR'], $localhosts, true))
			|| ($connection instanceof mysqli && !in_array(strtolower(explode(' ', $connection->host_info)[0]), $localhosts, true))
		) {
			echo '<script' . Adminer\nonce() . '>document.documentElement.className+=" remote";</script>';
		}
	}
}
