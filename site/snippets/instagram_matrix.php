<?php
$insta_metropresents  = instagrambadge($tag='MetroPresents',$count=4);
$insta_lovemetrola    = instagrambadge($tag='LoveMetroLA',$count=4);
$insta_GoMetro        = instagrambadge($tag='GoMetro',$count=4);
?>


<!-- INSTAGRAM
================================= -->
<section id="instagram_matrix" class="headline-section section-gray section">

	<div class="container">

		<h2 class="section-heading text-center hidden">instagram</h2>
		<h2 class="section-heading text-center">#MetroPresents</h2>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">


        <div id="masonry">
          <ul>
            <?php foreach($insta_metropresents as $pic): ?>
            <li>
              <a href="<?php echo $pic->link ?>" title="<?php echo $pic->caption->text ?>"><img src="<?php echo $pic->images->thumbnail->url ?>" width="300" height="300" alt="MetroPresents" /></a>
            </li>
            <?php endforeach ?>
          </ul>

        </div>


			</div>
		</div>





		<h2 class="section-heading text-center">#LoveMetroLA</h2>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">


        <div id="masonry">

          <ul>
            <?php foreach($insta_lovemetrola as $pic): ?>
            <li>
              <a href="<?php echo $pic->link ?>" title="<?php echo $pic->caption->text ?>"><img src="<?php echo $pic->images->thumbnail->url ?>" width="200" height="200" alt="my alt" /></a>
            </li>
            <?php endforeach ?>
          </ul>


        </div>


			</div>
		</div>




		<h2 class="section-heading text-center">#GoMetro</h2>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">


        <div id="masonry">
          <ul>
            <?php foreach($insta_GoMetro as $pic): ?>
            <li>
              <a href="<?php echo $pic->link ?>" title="<?php echo $pic->caption->text ?>"><img src="<?php echo $pic->images->thumbnail->url ?>" width="200" height="200" alt="my alt" /></a>
            </li>
            <?php endforeach ?>
          </ul>
        </div>


			</div>
		</div>


	</div>

</section>
