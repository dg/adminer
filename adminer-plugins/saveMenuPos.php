<?php

/**
 * Remembers scroll position in the table list
 * @author David Grudl
 * @license BSD
 */
class AdminerSaveMenuPos
{
	public function head()
	{
		if (!Adminer\DB) {
			return;
		} ?>
<script<?= Adminer\nonce() ?> type="text/javascript">

if (window.localStorage) {
	document.addEventListener('DOMContentLoaded', function() {
		let key = 'menuPos@' + '<?= Adminer\DB ?>',
			pos = localStorage.getItem(key)
			menu = document.getElementById('menu');

		if (pos) {
			menu.scrollTop = pos;
		}

		window.addEventListener('unload', function() {
			localStorage.setItem(key, menu.scrollTop);
		}, false);
	});
}

</script>
<?php
	}
}
