<?php

/**
 * @author David Grudl
 * @license BSD
 */
class AdminerRemoteColor
{
	function head()
	{
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) || !isset($_SERVER['REMOTE_ADDR']) ||
			!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')))
		{
			echo '<script>document.documentElement.className+=" remote";</script>';
		}
	}

}
