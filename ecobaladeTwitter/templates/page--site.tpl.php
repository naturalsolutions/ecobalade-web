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

<?php global $base_url; ?>

<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	 <?php if ($breadcrumb): /*print $breadcrumb;*/echo "<div class='breadcrumb'><a href='".$base_url."'>Accueil</a>&nbsp»&nbsp<a href='".$base_url."/les-sites' title='les sites'>Les sites</a>&nbsp»&nbsp".$title." </div>"; endif;?>
      <a id="main-content"></a>
	<div class="container-node">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
	  <?php print $messages; ?>
	   <?php print $messages; ?>

		<div class="row-fluid">
		  
			<section class="span12">  
		   
				   <?php if ($node){			 
							$long = $node->field_longitude; 
							$long = $long[und][0][value];
							$lat = $node->field_latitude; 
							$lat = $lat[und][0][value];
							$nbr_sp =  $node->field_esp_ces_pr_sentent;
							$nbr_sp = $nbr_sp[und];
							
							$id_site = $node->field_id_site;
							$id_site = $id_site[und][0][value];
					}?>		
					
					
					<div class="row-fluid">
						<div class="span12" id='blockSliderPano'>
							<h2>A proximité du site naturel</h2>
							<div id="div_list_ex"></div>
						</div>
					</div>
					
					<!-- script permettant d'afficher les images panoramio dans div_list_ex -->
					<script type="text/javascript">
					  var req = {
							'rect': {'sw': {'lat': <?php echo ($lat-0.05); ?>, 'lng': <?php echo ($long-0.05); ?>}, 'ne': {'lat': <?php echo ($lat+0.05); ?>, 'lng': <?php echo ($long+0.05); ?>}}
					  };
					  var list_ex_options = {'width': 1150, 'height': 150, 'columns': 7, 'croppedPhotos': true};
					  var list_ex_widget = new panoramio.PhotoListWidget('div_list_ex', req, list_ex_options);
					  list_ex_widget.setPosition(0);
					</script>

					<div class="row-fluid">
						<div class="span6" id="details_site">
						
							<div class = "nb_esp">
							</div>
							<?php if ($node){			 
								$sitenid = $node->nid; 
								print views_embed_view('v_details_site','block_details_site',$sitenid); //affichage des info du site
							}?>
							<span><?php echo ("<span class='bebette' title='Espèces associées au site Natura 2000'></span>".count($nbr_sp));?></span>
							<a class="btn pull-right back-page btn-primary" target="" rel="" title="inpn" href="http://inpn.mnhn.fr/site/natura2000/<?php echo $id_site;?>">Accéder à la fiche INPN</a>
						</div>
						<div class="span6" id="slideshow_site">
		                	
		                	<?php if ($node){			 
							print views_embed_view('v_details_site','block_galleriffic',$sitenid);  // affichage du slideshow des especes
							}?>
							
						</div>
					</div>					
					
					
					<div class="row-fluid">
						<div class="span12" id="localisation_site">
							
						<?php if ($node){			 
							print views_embed_view('v_map_localisation_details_site','page',$sitenid); //affichage de la carte localisation du site								
						}?>

						</div>
					</div>
				  					
									
		  </section>
		  
	  </div>
 </div><!-- fin container-node -->
	</div>
  		<?php print render($page['footer']); ?>
