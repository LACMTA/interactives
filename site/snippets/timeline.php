
<!-- TIMELINE JS
			================================= -->
			<section id="><?php echo $data->slug() ?>" class="headline-section section-gray section">

				<?php

				// extract the ID from this string:
				// https://docs.google.com/spreadsheets/d/  -1Fgj9ZlQ9mYboyPpHO9ARhb-zZ9kzzRxZXUAbKHmQcaQ- /pubhtml?gid=0&single=true
				$expl = explode('/',$data->googledoc()->text());
				$docid = $expl[5];
				$font = "Bevan-PotanoSans";
				$maptype = "toner";
				$src = "cdn.knightlab.com/libs/timeline/latest/embed/index.html?source=".$docid."&font=".$font."&maptype=".$maptype."&lang=en&height=650";

				?>


				<div class="container">

					<h2 class="section-heading text-center hidden"><?php echo $data->uid() ?></h2>
					<h2 class="section-heading text-center"><?php echo $data->uid() ?></h2>

					<div class="row">
						<div class="col-md-10 col-md-offset-1">

							<iframe src='//<?php echo $src ?>' width='100%' height='650' frameborder='0'></iframe>

						<p class="lead">
              <?php echo $data->text()->kirbytext() ?>
            </p>

						</div>
					</div>

				</div>

			</section>
<!-- END HEADLINE -->
