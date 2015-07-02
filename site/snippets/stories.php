<?php
// riders: From Riders
// partners: From Partners
// metro: From Metro
// library: From the Library

$stories_riders = $data->children()->visible()->filterBy('category', 'riders', ',');
$stories_partners = $data->children()->visible()->filterBy('category', 'partners', ',');
$stories_metro = $data->children()->visible()->filterBy('category', 'metro', ',');
$stories_library = $data->children()->visible()->filterBy('category', 'library', ',');

$show_riders    = ( count($stories_riders)>0 );
$show_partners  = ( count($stories_partners)>0 );
$show_metro     = ( count($stories_metro)>0 );
$show_library   = ( count($stories_library)>0 );
?>
<?php
// set up the custom variables
$data ?: $page;
list($displaytitle, $mysnippet) = setVars($data,"item");
?>

<!-- STORIES
  ================================= -->
  <section id="<?php echo $data->uid() ?>" class="headline-section section">

    <div class="container">

      <h2 class="section-heading-green"><?php echo $data->subtitle() ?></h2>

      <?php echo $data->text()->kirbytext() ?>

      <?php if($show_riders): ?>
        <h2 class="section-heading text-center">Stories From Riders</h2>
        <div class="benefits-row row">
              <?php
                foreach($stories_riders as $story):
                  // snippet('story', array('data' => $story));
                  // echo "use snip: " . getSnippet($story,'link');
                  snippet(getSnippet($story,'link'), array('data' => $story));
                endforeach;
              ?>
        </div>
      <?php endif; ?>

      <?php if($show_library): ?>
        <h2 class="section-heading text-center">Stories From the Metro Library</h2>
        <div class="benefits-row row">
          <?php
            foreach($stories_library as $story):
              // snippet('story', array('data' => $story));
              snippet(getSnippet($story,'link'), array('data' => $story));
            endforeach;
          ?>
        </div>
      <?php endif; ?>

  </section>
