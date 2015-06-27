
<?php
snippet('header');

foreach($pages->visible() as $section) {
	// render with snippet if possible
	// echo "use snippet: " . getSnippet($section,'item');
	snippet(getSnippet($section,'item'), array('data' => $section));
}

snippet('footer');
?>
