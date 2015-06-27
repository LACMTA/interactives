<!-- MAP
================================= -->
<section id="map" class="headline-section section-gray section">

	<div class="container">

		<h2 class="section-heading text-center hidden"><?php echo $data->uid() ?></h2>

			<h2 class="section-heading-red"><?php echo $data->subtitle() ?></h2>
			<br />

			<?php if($data->swf()->bool()): ?>

				<div id="flashContent">
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="<?php echo $data->width() ?>" height="<?php echo $data->height() ?>" id="flash" align="middle">
						<param name="movie" value="<?php echo $data->iframe() ?>">
						<param name="quality" value="high">
						<param name="bgcolor" value="<?php echo $data->bgcolor() ?>">
						<param name="play" value="true">
						<param name="loop" value="true">
						<param name="wmode" value="window">
						<param name="scale" value="showall">
						<param name="menu" value="true">
						<param name="devicefont" value="false">
						<param name="salign" value="">
						<param name="allowScriptAccess" value="sameDomain">
						<param name="allowFullScreen" value="true">
						<!--[if !IE]>-->
						<object type="application/x-shockwave-flash" data="<?php echo $data->iframeurl() ?>" width="<?php echo $data->width() ?>" height="<?php echo $data->height() ?>" id="flash2">
							<param name="movie" value="Metro_25th_Anniversary.swf">
							<param name="quality" value="high">
							<param name="bgcolor" value="<?php echo $data->bgcolor() ?>">
							<param name="play" value="true">
							<param name="loop" value="true">
							<param name="wmode" value="window">
							<param name="scale" value="showall">
							<param name="menu" value="true">
							<param name="devicefont" value="false">
							<param name="salign" value="">
							<param name="allowScriptAccess" value="sameDomain">
							<param name="allowFullScreen" value="true">
						<!--<![endif]-->
							<a href="http://www.adobe.com/go/getflash">
								<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player">
							</a>
						<!--[if !IE]>-->
						</object>
						<!--<![endif]-->
					</object>
				</div>

			<?php else: ?>

				<iframe src="<?php echo $data->iframeurl() ?>" style="width: <?php echo $data->width() ?>; height: <?php echo $data->height() ?>"></iframe>

			<?php endif; ?>

	        <br/>

	</div>

</section>
