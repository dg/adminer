<?php

/**
 * Custom fixed for Adminer
 * @author David Grudl
 */
class AdminerCustomFixes
{
	public function head()
	{
		// moves the list of plugins to the bottom
		if (!isset($_GET['db'])) {
?>
<script<?= Adminer\nonce() ?>>
document.addEventListener('DOMContentLoaded', () => {
	let el = document.querySelector('#content > p + ul + form');
	if (el) {
		el.parentNode.appendChild(el.previousElementSibling.previousElementSibling);
		el.parentNode.appendChild(el.previousElementSibling);
	}
});
</script>
<?php
		}
	}
}
