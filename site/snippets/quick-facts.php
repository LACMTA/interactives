			<!-- QUICK FACTS
			================================= -->
			<section id="<?php echo $data->uid() ?>" class="benefits-section section-gray section">

				<div class="container">

					<h2 class="section-heading text-center"><?php echo $data->title() ?></h2>

					<div class="benefits-row row">

						<div class="row">
							<?php
								foreach($data->children()->visible() as $eapage):

										snippet('fact', array('data' => $eapage));

								endforeach;
							?>
						</div>
					</div>

				</div>

			</section>
