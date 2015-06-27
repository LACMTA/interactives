
<ul id="header-nav" class="nav navbar-nav">

  <li><a href="#hero" class="hidden">Top</a></li>

  <li><a href="/">Metro Interactives: <?php echo $site->title() ?>&nbsp;|</a></li>

  <?php 
    $items = $pages->visible()->not('hero');
    foreach($items as $p):
  ?>
    <li><a href="#<?php echo $p->uid() ?>"><?php echo $p->uid() ?></a></li>
  <?php endforeach ?>
 


  <!-- HEADER ACTION BUTTON -->
  <!-- <li class="header-action-button"><a href="#" class="btn btn-primary">Action Button</a></li> -->

</ul>



