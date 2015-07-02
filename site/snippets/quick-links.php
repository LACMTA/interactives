<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,$asnippet="item");
?>

			<!-- QUICK LINKS
			================================= -->
			<section id="<?php echo $data->uid() ?>" class="benefits-section section-gray section">

				<div class="container">

					<h2 class="section-heading"><?php echo $displaytitle ?></h2>

					<p>
	          			<?php echo $data->text()->kirbytext() ?>
	        		</p>

					<div class="benefits-row row">

						<div class="row">
							<?php
								foreach($data->children()->visible() as $eapage):
									// echo "quicklinks: use snippet: " . getSnippet($eapage,'link');
									snippet(getSnippet($eapage,'link'), array('data' => $eapage));
								endforeach;
							?>
						</div>
					</div>

				</div>

			</section>
