<?php
	$tmpDate = getdate(0);
	$currentDate = getdate();

	// set up the custom variables
	$data ?: $page;
	list($displaytitle, $mysnippet) = setVars($data,"item");
?>



			<!-- EVENTS
			================================= -->
			<section id="events" class="faq-section section">

				<?php
					if (!$calendar->getAllEvents()):
						echo l::get('calendar-no-entry');
					else:
				?>


				<div class="container">

					<h2 class="section-heading-gold"><?php echo $subtitle ?></h2>

					<p>
		  	          <?php echo $text ?>
		  	        </p>



					<div class="faq-row row">
						<?php
							foreach ($calendar->getAllEvents() as $event):
							$startdate = $event->getBeginDate();
							$enddate = $event->getEndDate();
							$format = "%mon\$d";
						?>
								<div class="col-md-10">
									<div class="faq-item">
										<span class="faq-item-icon fa fa-calendar"></span>
										<h4 class="faq-item-heading">
											<?php
												$ampm=$startdate['hours'] .":00am";
												if($startdate['hours']>12):
													$ampm=($startdate['hours']-12) .":00pm";
												endif;
												$format = '%s, %s %d at %s';
												echo sprintf($format, $startdate['weekday'],$startdate['month'],$startdate['mday'],$ampm);
											?>
											|&nbsp;<?php echo $event->getField('summary') ?>
											<br />

										</h4>

										<div class="faq-item-text">

										</div>
									</div>
								</div>
						<?php
							$tmpDate = $startdate;
							endforeach;
						?>



					</div>

				</div>
				<?php endif; ?>


	<section id="note" class="faq-section section">
		<div class="container">

			<div class="faq-row row">
				<div class="col-md-10">
					<div class="faq-item">
						<P class="lead">In honor of the 25th anniversary, we’ll be giving out free prizes to the first 25 people to arrive.</P>
					</div>
				</div>
			</div>
		</div>
	</section>

</section>
