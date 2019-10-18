<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  	<div class="container">
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


<div id="container-mobile">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	

	<div class="container">

  	<div class="row">


      <div class="span7">

        <div id='blocGauche'>    
          <div id='titleOfMobileApp'><h1>ecoBalade</h1></div>
          
          <div id='l1'>       
            <div id='description'>
              <div id='pitcoEco'></div>
              <div class="lesTitres"><h2>Avec l'application ecoBalade</h2> Arpentez les chemins et <h3> Amusez-vous à reconnaître les arbres, les oiseaux et les petites bêtes!</h3></div>
            </div>
          </div>
          
          <div id='l2'>
            <a target="_blank" title="Télécharger l'application ecoBalade sur GooglePlay" href='https://play.google.com/store/apps/details?id=com.ns.ecoBalade&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5ucy5lY29CYWxhZGUiXQ..'><div id='badge4GooglePlay'></div></a>
            <a target="_blank" title="Télécharger l'application sur l'appleStore" href='https://itunes.apple.com/fr/app/ecobalade/id674569147?l=fr&ls=1&mt=8'><div id='badge4AppStore'></div></a>
          </div>

          <div id='l4'>
            <div id='blocResSociaux'>
              <div id='blok_twt'><a target="_blank" href="https://twitter.com/Nat_Solutions" title="Suivez nous sur twitter"><div id="twt_ico"></div><p>Suivez nous sur twitter</p></a></div>
              <div id='blok_fb'><a target="_blank" href="https://www.facebook.com/EcoBalade" title="Devenez fan sur facebook"><div id="fb_ico"></div><p>Devenez fan sur facebook</p></a></div>
            </div>            
          </div> <!-- FIN l4 -->


        </div> <!-- FIN BLOC GAUCHE -->

      </div> <!-- Fin SPAN7 -->



      <div class="span5">
        <div id='iphonePresenter'></div>
      </div>

  <div class="span12">

      <div id='l5'>        
        <a class="imgMockup" rel="group" href="../sites/all/themes/ecobaladeTwitter/img/screen/carte_des_balades.png"><div id='screen_iphone1'></div></a>
        <a class="imgMockup" rel="group" href="../sites/all/themes/ecobaladeTwitter/img/screen/balades.png"><div id='screen_iphone2'></div></a>
        <a class="imgMockup" rel="group" href="../sites/all/themes/ecobaladeTwitter/img/screen/liste.png"><div id='screen_iphone3'></div></a>        
        <a class="imgMockup" rel="group" href="../sites/all/themes/ecobaladeTwitter/img/screen/arbousier.png"><div id='screen_iphone4'></div></a>
        <a class="imgMockup" rel="group" href="../sites/all/themes/ecobaladeTwitter/img/screen/espece.png"><div id='screen_iphone5'></div></a>
        <a class="imgMockup" rel="group" href="../sites/all/themes/ecobaladeTwitter/img/screen/bravo.png"><div id='screen_iphone6'></div></a>        
      </div>

      <div id='l6'>
          <p id='copyR'>© 2007-2013 Natural-Solutions - ecoBalade</p>
          <!-- <p>Aidez-nous à passer le mot:</p> -->
          
          <div class="bloc_partage">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_native_toolbox"></div>
          </div>          

      </div>
  </div>








    </div> <!-- fin row -->
  </div> <!--fin container--> 

</div> <!-- FIN .container-mobile -->
  
  
   <?php print render($page['footer']); ?>

<script type="text/javascript">

$(document).ready(function() {
//LightBox pour balades similaire
if( $('.imgMockup').length > 1 ){

    $('.imgMockup').vanillabox({   
      loop: true,
      repositionOnScroll: true,
      type: 'image',
      adjustToWindow: 'both'
    }); 
  } 
});

</script>


	

