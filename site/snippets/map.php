<?php
// special js for this page
echo js('assets/js/swiffy_runtime.js');
echo js('assets/js/swiffy_bloomingmap.js');
?>

<!-- BLOOMING MAP
================================= -->
<section id="map" class="headline-section section-gray section">

	<div class="container">

		<h2 class="section-heading text-center hidden"><?php echo $data->uid() ?></h2>

			<h2 class="section-heading-red"><?php echo $data->subtitle() ?></h2>

			<div id="swiffycontainer" style="width: 100%; height: 800px"></div>
			    <script>
			      
			      var stage = new swiffy.Stage(document.getElementById('swiffycontainer'),
			          swiffyobject, {  });
			      
			      stage.start();
			    </script>

	        <br/>

	</div>

</section>
