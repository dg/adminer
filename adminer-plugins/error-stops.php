<?php

/**
 * Checks the "Stop on error" box by default on the SQL command page
 */
class AdminerErrorStops
{
	public function __construct()
	{
		if (isset($_GET['sql']) && !isset($_GET['error_stops'])) {
			$_GET['error_stops'] = 1;
		}
	}
}
