<?php
if ( empty( $data->icon() ) ):
	$icon = "train";
endif;
?>

<div class="benefit">
	<h4 class="benefit-title"><a href="<?php echo $data->url() ?>"><?php echo $data->uid() ?></a></h4>
	<p class="benefit-description"><?php echo excerpt($data->text(), 80) ?></p>
</div>
