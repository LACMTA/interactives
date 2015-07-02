<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<?php 
snippet('header');

snippet('iframe', array('data' => $data));

snippet('footer') 
?>
