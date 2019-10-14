<?php 
/****************************************************************************************************************************************************/
/*                                                                TEMPLATE 404                                                                      */ 
/*                                                                                                                                                  */
/*                                                                                                                                                  */
/*                                                                                                                                                  */
/****************************************************************************************************************************************************/
?>
<?php global $base_url; ?>
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

<!-- <div class="bg_404"> -->


  <div class="container-fluid section404">
    
    <div class="row-fluid monTitle">
      <div class="span12">          
          <h1 class="page-header">404 - Page non trouvée</h1>
      </div>
    </div>

    
    <div class="row-fluid button">  
      <div class="span4 offset1">                    
          <a  class="btn btn_baladeterre" target="" rel="" title="Les Balades" href="http://www.ecobalade.fr/balade">Retour aux balades <span id="terre">terrestres</span></a>
      </div>
    </div>

  </div> <!--fin container -->
<!--</div> <!--fin div bg404 -->

   <?php print render($page['footer']); ?>






