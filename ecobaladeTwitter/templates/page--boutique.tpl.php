<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  	<div class="container">
  	  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
  	  </a>
      <?php print_r(render($page['content']['metatags'])); ?>
  	  <?php if ($logo): ?>
    		<a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
    		  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    		</a>
  	  <?php endif; ?>

  	  <?php if ($site_name || $site_slogan): ?>
    		<hgroup id="site-name-slogan">
    		  <?php if ($site_name): ?>
    			<h1>
    			  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
    			</h1>
    		  <?php endif; ?>
    		</hgroup>
  	  <?php endif; ?>
  	  
  	  <div class="nav-collapse pull-right">
    	  <nav role="navigation">
      		<?php if ($primary_nav): ?>
      		  <?php print $primary_nav; ?>
      		<?php endif; ?>
      	  
      		<?php if ($search): ?>
      		  <?php if ($search): print render($search); endif; ?>
      		<?php endif; ?>
      		
      		<?php if ($secondary_nav): ?>
      		  <?php print $secondary_nav; ?>
      		<?php endif; ?>
    		</nav>
  	  </div>         
  	</div>
  </div>
</header>

<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	<?php if ($breadcrumb): print $breadcrumb; endif;?>
      <a id="main-content"></a>
	<div class="container-node">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1> 
        
        <div class="intro">
          <h2>Notre sélection</h2> 
          <p>
          Préparez-vous à partir en <strong>rando</strong>. Ici nous vous proposons notre sélection de produits, cartes etc.<br/>
          Cette boutique est relié à <a href="https://www.amazon.fr/" title='vers le site amazon.fr' alt='vers le site amazon.fr'>Amazon</a>, la plateforme d'achat et vente en ligne préféré des français.</p>     
        </div>
        
        
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
	<div class="row">
	  
    <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
	  
	  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php //if ($breadcrumb): print $breadcrumb; endif;?>
      <!--<a id="main-content"></a>-->
      <?php //print render($title_prefix); ?>
      <?php //if ($title): ?>
        <!--<h1 class="page-header">--><?php //print $title; ?><!-- </h1> -->
      <?php //endif; ?>
      <?php //print render($title_suffix); ?>
      <?php //print $messages; ?>
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      

      <div id="boutique">
    	  <iframe src="http://astore.amazon.fr/ecobalade-21" width="100%" height="900" frameborder="0" scrolling="no"></iframe>
        
        

          <!-- <a href="http://www.natural-solutions.eu/contacts/" rel="internal" title='Contactez nous pour commander un livret' alt='Contactez nous pour commander un livret'>          -->
          <!-- </a> -->
        <div class='sideBarBoutique'>
          <h3>Guides papiers</h3>
          <p>Ce sont des livrets élaborés par nos soins. Ils présentent les parcours et les espèces avec à travers de belles illustrations.<br/> <a href="http://www.natural-solutions.eu/contacts/">Contactez-nous</a> pour toute commande.</p>
          <a href="balade/balade-de-marseille-13-l-archipel-du-frioul"><span class='frioul'>De l'archipel du Frioul: 5€ </span></a>
          <a href="balade/balade-en-bretagne-la-reserve-du-cap-sizun-29"><span class='cap'>Du Cap Sizun</span></a>
          <a href="balade/Balade-de-l-Epine-Sentier-Decouverte-Serrois"><span class='serrois'>Du Serrois</span></a>
        </div>

      </div>
       

      </section>



    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>

 </div> <!--fin container-node--> 

</div>
   <?php print render($page['footer']); ?>