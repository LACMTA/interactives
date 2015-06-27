	<!-- FAQ -->
	<div class="col-md-6">
		<div class="faq-item">
			<span class="faq-item-icon fa fa-question-circle"></span>
			<h4 class="faq-item-heading"><?php echo $data->title() ?></h4>
			<div class="faq-item-text">
				<?php echo excerpt($data->text(), 200) ?>
			</div>
		</div>
	</div>
