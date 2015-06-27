<?php
// set up the custom variables
if ( empty($data) ):
  $data = $page;
endif;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<!-- HERO
================================= -->
<section id="hero" class="hero-section hero-layout-simple hero-fullscreen section section-light" style="background-image: url(/assets/images/hero_type.png); height: 100%; width: 100%;">

  <div class="section-background">

    <?php if($data->image_url() != ""): ?>
      <!-- IMAGE BACKGROUND -->
      <div class="section-background-image parallax" data-stellar-ratio="0.4">
        <img src="<?php echo $data->image_url()->html() ?>" alt="" style="opacity: 0.3;">
      </div>
    <?php elseif($data->herovideo_url() != ""): ?>
      <!-- VIDEO BACKGROUND -->
      <div class="section-background-video section-background parallax" data-stellar-ratio="0.3">
        <video preload="auto" autoplay loop muted style="opacity: 0.5;">
          <source type="video/mp4" src="<?php echo $data->herovideo_url() ?>">
					<source type="video/ogg" src="/assets/videos/video-bg.ogv">
					<source type="video/webm" src="/assets/videos/video-bg.webm">
        </video>
      </div>
    <?php endif ?>

    <!-- SLIDESHOW BACKGROUND -->
    <!-- <ul class="section-background-slideshow parallax" data-stellar-ratio="0.4" data-speed="800" data-timeout="4000">
      <li><img src="/assets/images/backgrounds/hero-bg-slideshow-1.jpg" alt="" style="opacity: 0.25;"></li>
      <li><img src="/assets/images/backgrounds/hero-bg-slideshow-2.jpg" alt="" style="opacity: 0.25;"></li>
      <li><img src="/assets/images/backgrounds/hero-bg-slideshow-3.jpg" alt="" style="opacity: 0.2;"></li>
    </ul> -->



  <div class="container">

    <div class="hero-content">
      <div class="hero-content-inner">

        <div class="row">
          <div class="col-md-10 col-md-offset-1">

            <div class="hero-heading text-center" data-animation="fadeIn">

              <h1 class="hero-title"><?php echo $displaytitle ?></h1>

              <p class="hero-tagline"><?php echo $data->text()->kirbytext() ?></p>

            </div>

<!--             <p class="hero-buttons text-center">
              <a href="#<?php echo $data->downlink() ?>" class="btn btn-lg btn-default"><?php echo $data->downlink_title() ?></a>
            </p>
 -->
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- HERO START LINK -->
  <a href="#<?php echo $data->downlink() ?>" class="hero-start-link anchor-link"><span class="fa fa-angle-double-down"></span></a>

</div>

</section>
