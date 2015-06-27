<?php
// set up the custom variables
if ( empty($data) ):
  $data = $page;
endif;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<?php 
snippet('header');

snippet('quick-links', array('data' => $data));

snippet('footer') 
?>
