<?php

/** Enable login for password-less database
* @link https://www.adminer.org/plugins/#use
* @author Jakub Vrana, https://www.vrana.cz/
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class AdminerLoginWithoutCredentials
{
	public function login()
	{
		$local = !isset($_SERVER['HTTP_X_FORWARDED_FOR'])
			&& isset($_SERVER['REMOTE_ADDR'])
			&& in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'], true);

		return $local ? true : null;
	}
}
