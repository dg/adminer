<?php

/**
 * @author David Grudl
 * @license BSD
 */
class AdminerSaveMenuPos
{
	function head()
	{
		if (!DB) {
			return;
		}
		?>
<script type="text/javascript">

if (window.localStorage) {
	document.addEventListener('DOMContentLoaded', function() {
		var key = 'menuPos@' + '<?php echo DB; ?>',
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
