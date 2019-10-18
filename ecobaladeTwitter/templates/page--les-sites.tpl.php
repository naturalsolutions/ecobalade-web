<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  	<div class="container-fluid">
  	  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
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

<div id="contanierOfBaniereSite">
  <div id='btnShowHideMessage'><p>En savoir+</p></div>
  <div id='baniereMessageSite'><p><span style='font-size:1.4em;'>“</span>Ce sont des sites qui pourraient devenir des ecoBalades. Ils se basent sur une liste de sites Natura 2000 non exhaustive. EcoBalade vous les présentent pour que vous puissiez arpenter ces sites et leur biodiversité, dans le respect des règlementations. Les espèces qui vous sont présentées sont des espèces d’importance pour chaque sites Natura 2000.<span style='font-size:1.4em;'>”</span><span style='display: block; text-align: center;'>Info sur Natura 2000 <a href='http://www.developpement-durable.gouv.fr/-Natura-2000,2414-.html' target='_blank' title='Vers natura2000' alt='Vers natura2000'>ici</a>.</span></p></div>
</div>

<div class="container-fluid">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
 <?php if ($breadcrumb): /*print $breadcrumb;*/echo "<div class='breadcrumb'><a href='".$base_url."'>Accueil</a>&nbsp»&nbspLes sites</div>"; endif;?>

	
      <a id="main-content"></a>
	<div class="container-node">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
	<div class="row-fluid">
	  
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

      <?php print views_embed_view('the_sites_openlayer','block_1'); 	  //affichage de la carte des sites ?><br/>
	  <div class="container">
	  	  <h1 class="page-header">Liste des espaces naturels</h1>
      <?php print views_embed_view('the_sites_openlayer','block_2'); 	  //affichage liste des sites ?>
	  </div>
	   <?php print render($content); ?>
	  </section>


  </div>
 </div> <!--fin container-node--> 
<script>

jQuery( document ).ready(function() {
// Handler for .ready() called.
  
  jQuery('#baniereMessageSite').click(function() {
    
    jQuery('#baniereMessageSite').slideUp( "normal", function() {
      // Animation complete.
      jQuery('#btnShowHideMessage').slideDown();
    });
    
  });
  jQuery('#btnShowHideMessage').click(function() {
    
    jQuery('#btnShowHideMessage').slideUp( "normal", function() {
      // Animation complete.
      jQuery('#baniereMessageSite').slideDown();
    });
    
  });

});

</script>
   <?php print render($page['footer']); ?>
</div>


	

