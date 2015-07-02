<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

  <!-- NUMBER - ITEM X of 3-4 -->
  <div class="col-sm-6 col-md-4">
    <div class="numbers-item">
      <div class="numbers-item-counter">
        <span class="counter-up"><?php echo $data->mynumber() ?></span>
        <?php echo $data->text() ?>
      </div>
      <div class="numbers-item-caption"><?php echo $displaytitle ?></div>
    </div>
  </div>
