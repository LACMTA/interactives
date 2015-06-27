
<!-- VIDEO SECTION
================================= -->
<section id="video" class="video-section section-gray section">

  <div class="container">

    <h2 class="section-heading text-center hidden"><?php echo $data->uid() ?></h2>
    <h2 class="section-heading text-center"><?php echo $data->subtitle() ?></h2>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <div class="video-embed">

          <?php if ( $data->vimeoID() != "" ): ?>
            <!-- EMBED VIDEO EMBED FROM VIMEO -->
            <iframe class="video-async" data-source="vimeo" data-video="<?php echo $data->vimeoID() ?>" data-color="f3ae73" allowfullscreen></iframe>
          <?php elseif ( $data->youtubeID() != "" ): ?>
            <!-- EMBED VIDEO FROM YOUTUBE -->
            <iframe class="video-async" data-source="youtube" data-video="<?php echo $data->youtubeID() ?>" allowfullscreen></iframe>
          <?php endif ?>
        </div>

      </div>
    </div>

  </div>
</section>
