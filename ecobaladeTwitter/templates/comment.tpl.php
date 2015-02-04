<article class="<?php print $classes . ' ' . $zebra; ?>"<?php print $attributes; ?>>
  
  <header>
    
      <?php //print $picture; ?>
      <?php //print $submitted; ?>
      <?php //print $permalink; ?>
    
 <!--   <?php //print render($title_prefix); ?>
    <?php //if ($title): ?>
       <h3<?php //print $title_attributes; ?>>
        <?php //print $title; ?>
        <?php //if ($new): ?>
          <mark class="new"><?php //print $new; ?></mark>
        <?php //endif; ?>
      </h3>
    <?php //if ($new): ?>
      <mark class="new"><?php //print $new; ?></mark>
    <?php //endif; ?>
    <?php //print render($title_suffix); ?>
  </header> -->

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['links']);
    //print render($content);
        
    print views_embed_view('v_affiche_comment','block',$node->cid);
  ?>


  <?php if ($signature): ?>
    <footer class="user-signature clearfix">
      <?php print $signature; ?>
    </footer>
  <?php endif; ?>

  <?php //print render($content['links']) ?>
</article> <!-- /.comment -->
