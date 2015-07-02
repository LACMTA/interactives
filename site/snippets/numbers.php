<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<!-- NUMBERS
================================= -->
<section id="numbers" class="numbers-section section-dark section">

  <div class="section-background">

    <!-- IMAGE BACKGROUND -->
    <div class="section-background-image parallax" data-stellar-ratio="0.4">
      <img src="/assets/images/backgrounds/numbers-bg.jpg" style="opacity: 0.2;">
    </div>

  </div>

  <div class="container">

    <h2 class="section-heading text-center"><?php echo $displaytitle ?></h2>


    <div class="numbers-row row">


    <p class="lead">
      <?php echo $data->text()->kirbytext() ?>
    </p>


      <?php
      foreach($data->children() as $subpage):
        // children with numbers
        if ($subpage->mynumber() != ''):
          snippet(getSnippet($subpage,'item'), array('data' => $eapage));
        endif;
      endforeach;
    ?>

    <?php
    foreach($data->children()->children() as $subpage):
      // grandchildren!
      if ($subpage->mynumber() != ''):
    ?>

      <!-- NUMBERS - ITEM X of 3-4 -->
      <div class="col-sm-6 col-md-4">
        <div class="numbers-item">
          <div class="numbers-item-counter">
            <span class="counter-up"><?php echo $subpage->mynumber() ?></span>
            <?php echo $subpage->text() ?>
          </div>
          <div class="numbers-item-caption"><?php echo $subpage->parent->title() ?></div>
        </div>
      </div>

    <?php
    endif;
  endforeach; ?>


    </div>
  </div>
</section>
