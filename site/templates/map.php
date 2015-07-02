<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<?php 
snippet('header');
?>

<?php
// special js for this page
echo js('assets/js/swiffy_runtime.js');
echo js('assets/js/swiffy_bloomingmap.js');
?>


<div id="swiffycontainer" style="width: 100%; height: 800px"></div>
    <script>
      
      var stage = new swiffy.Stage(document.getElementById('swiffycontainer'),
          swiffyobject, {  });
      
      stage.start();
    </script>


<?php
snippet('footer') 
?>
