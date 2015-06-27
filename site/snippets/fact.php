	<!-- FACT -->
		<div class="col-sm-6 col-md-4">
			<div class="benefit">
        <span class="benefit-icon fa fa-<?php echo $data->icon() ?> bounceIn animated done-animation" data-animation="bounceIn"></span>
				<h4 class="benefit-title"><a href="<?php echo $data->url() ?>"><?php echo $data->title() ?></a></h4>
				<p class="benefit-title"><?php echo excerpt($data->text(), 200) ?></p>
			</div>
		</div>
