<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,$asnippet="item");
?>

<?php
snippet('header');
?>

<section id="<?php echo $data->uid() ?>" class="headline-section section-gray section">

	<div class="container">

		<h2 class="section-heading text-center"><?php echo $displaytitle ?></h2>

    <div class="about-row row">

					<!-- Images? make a slider -->
          <?php if ($page->hasImages()): ?>
					  <div class="about-image col-md-6 fadeIn animated done-animation" data-animation="fadeIn">
              <?php foreach($data->images() as $image): ?>
                <figure>
                  <a href="<?php echo $image->url() ?>">
                  <img src="<?php echo $image->url() ?>" alt="">
                  </a>
                </figure>
              <?php endforeach ?>
					</div>
        <?php endif; ?>



					<!-- DESCRIPTION TEXT -->
					<div class="about-text">
						<p>
              <?php echo $data->text()->kirbytext() ?>
            </p>


    			<?php
    				foreach($data->children()->visible() as $eapage):
              // render with snippet if possible
              snippet(getSnippet($eapage,'item'), array('data' => $eapage));

                echo '<div class="benefit">';
        					foreach($eapage->children()->visible() as $innerpage):
                    // use snippet if possible
                    snippet(getSnippet($innerpage,'item'), array('data' => $innerpage));
        					endforeach;
                echo '</div>';

              echo '</div>';
    				endforeach;
    			?>


        </div>
      </div>


<?php
snippet('footer');
?>
