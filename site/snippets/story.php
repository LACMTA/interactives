<?php
// set up the custom variables
if ( empty($data) ):
  $data = $page;
endif;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<!-- BADGE_STORY -->
<?php
  if ($data->hasImages()) :
    $style = "background:url('" . $data->image()->url() . "') no-repeat center center; background-size:82% auto;";
  else:
    $style = '';
  endif;

  if (  $data->jumplink()!=null  ) :
    $badgelink = $data->jumplink();
  else:
    $badgelink = $data->url();
  endif;
?>

  <div class="col-sm-6 col-md-4" style="<?php echo $style ?>">
    <a href="<?php echo $data->link() ?>">
      <div class="benefit" style="opacity:0.8; ">
        <h4 class="benefit-title"><?php echo $displaytitle ?></h4>
      </div>
    </a>
  </div>
<!-- END BADGE_STORY -->
