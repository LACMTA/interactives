<?php
// set up the custom variables
if ( empty($data) ):
  $data = $page;
endif;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

  <!-- JUXTAPOSE
  ================================= -->

      <h2 class="juxtaposejs"><?php echo $displaytitle ?></h2>


      <div class="portfolio-row row">
        <div style="height: <?php echo $data->height() ?>; width: <?php echo $data->width() ?>" class="juxtapose" data-startingposition="59" data-showlabels="true" data-showcredits="false" data-animate="true" data-mode="horizontal">
          <img src="<?php echo $data->leftimage_url()  ?>" data-label="<?php echo $data->leftimage_label() ?>"  data-credit="<?php echo $data->credit() ?>">
          <img src="<?php echo $data->rightimage_url() ?>" data-label="<?php echo $data->rightimage_label() ?>" data-credit="<?php echo $data->credit() ?>">
        </div>
        <p>
          <?php echo $data->text()->kirbytext() ?>
        </p>
      </div>

