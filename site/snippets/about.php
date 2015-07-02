<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<!-- ABOUT
  ================================= -->
  <section id="about" class="about-section section">

    <div class="container">

      <h2 class="section-heading-blue"><?php echo $displaytitle ?></h2>

      <?php echo $data->text()->kirbytext() ?>

      <?php 
          foreach($data->children()->visible() as $eapage):

          // hacky, ugh
          if (getSnippet($eapage,'item') == "juxtapose"):
            snippet(getSnippet($eapage,'juxtapose'), array('data' => $eapage));
          else:
        ?>
  					<h2 class="section-heading"><?php echo $eapage->subtitle() ?></h2>

  					<p>
  	          <?php echo $eapage->text()->kirbytext() ?>
  	        </p>

  					<div class="benefits-row row">

  						<div class="row">
  							<?php
  								foreach($eapage->children()->visible() as $innerpage):
                    // use link snippet 
                    // echo "about: use snippet: " . getSnippet($innerpage,'link') . " for ". $innerpage->uid();
                    snippet('link', array('data' => $innerpage));
  								endforeach;
  							?>
  						</div>
  					</div>

          <?php
              endif;
            endforeach; 
          ?>


  </section>
