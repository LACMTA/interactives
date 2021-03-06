<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>


<!-- ABOUT
  ================================= -->
  <section id="instagram" class="about-section section">

    <div class="container">



      <h2 class="section-heading text-center"><?php echo $displaytitle ?></h2>

      <?php echo $data->text()->kirbytext() ?>

<!-- START CAROUSEL -->

  <div id="carousel-example-generic" class="carousel slide col-sm-6 col-md-4">
  <!-- Indicators -->
  	<ol class="carousel-indicators">
  		<?php $n=0; foreach($data->images() as $image): ?>
  		<li data-target="#carousel-example-generic" data-slide-to="<?php echo $n; $n++; ?>" class="<?php if($n==1) echo ' active' ?>">
  <!-- Show a Number for the Indicator -->
  			<?php echo $n; ?>
  		</li>
  		<?php endforeach ?>
  	</ol>
  <!-- Wrapper for slides -->
  	<div class="carousel-inner">
  		<?php $n=0; foreach($data->images() as $image): $n++; ?>
  		<div class="item<?php if($n==1) echo ' active' ?>">
  			<img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>" class="img-responsive" />
  			<div class="carousel-caption">
  				<?php echo kirbytext($image->caption()) ?>
  			</div>
  		</div>
  		<?php endforeach ?>
  	</div>
  <!-- Controls -->
  	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
  		<span class="icon-prev"></span>
  	</a>
  	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
  		<span class="icon-next"></span>
  	</a>
  </div>


<!-- END CAROUSEL -->





  </section>
