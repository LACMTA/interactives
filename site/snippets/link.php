<?php
// set up the custom variables
if ( empty($data) ):
  $data = $page;
endif;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<!-- BADGE_LINK -->
<?php
  if ($data->hasImages()) :
    $style = "background:url(" . $data->image()->url() . ") no-repeat center center; background-size:82% auto;";
  else:
    $style = '';
  endif;
?>

  <div class="col-sm-6 col-md-4" style="<?php echo $style ?>">
    <a href="<?php echo $data->link() ?>">
      <div class="benefit" style="opacity:0.8; ">
        <h4 class="benefit-title"><?php echo $displaytitle ?></h4>
        <p class="benefit-description"><?php echo $data->kirbytext() ?></p>
      </div>
    </a>
  </div>
<!-- END BADGE_LINK -->
