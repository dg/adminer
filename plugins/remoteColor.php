<?php

/**
 * @author David Grudl
 * @license BSD
 */
class AdminerRemoteColor
{
	public function head()
	{
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) || !isset($_SERVER['REMOTE_ADDR']) ||
			!in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'], true)) {
			echo '<script' . nonce() . '>document.documentElement.className+=" remote";</script>';
		}
	}
}
