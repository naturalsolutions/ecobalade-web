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
	 <?php if ($breadcrumb): print $breadcrumb; endif;?>
      <a id="main-content"></a>
	<div class="container-node">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
	  <?php print $messages; ?>
	   <?php print $messages; ?>


 	<?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
	    <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

		<div class="row-fluid">
				
			<section class="span12">  
		  
					<?php if ($node){			 
							$espnid = $node->nid;
							$nom_scf = $node->field_nom_scientifique; 
							$nom_scf = $nom_scf[und][0][value];
							
							$groupe_tax = $node->field_groupe_taxonomique;
							$groupe_tax = $groupe_tax[und][0][taxonomy_term];
							$groupe_tax = $groupe_tax->name;
							
							$baladenid = $node->field_c_ft_balade;
							$baladenid = $baladenid[und][0][node];
							$baladenid = $baladenid->nid;
							
							$baladename = $node->field_c_ft_balade;
							$baladename = $baladename[und][0][node];
							$baladename = $baladename->title;
							
							$criteres = $node->field_crit_res;
							$criteres = $criteres[und];
							//$valEnCour = $criteres[0][taxonomy_term]->[name];
					}?>			  
						<div class="row-fluid">
							<div class="span9" id='blockEspece'>
							
									<div class="row-fluid">
										<div class="span12" id='blockTitleEsp'>
											<?php 		 
													if($groupe_tax == "Arbustes et plantes"){
														print ("<div title='Arbustes et plantes' id='picto_Arbustes'></div>");
													}else{
														print ("<div title='".$groupe_tax."' id='picto_".$groupe_tax."'></div>");
													}
													print ("<div id='nom_scf'>".$nom_scf."</div>");
											?>
											<a class="btn pull-right back-page btn-primary" target="" rel="" title="Retour à la liste des balades" href="<?php echo $base_path;?>liste-balades">Retour à la liste des balades</a>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span12" id='blockSlideEsp'>
											<?php 		 
													print views_embed_view('v_slideshow_detail_taxon','block',$espnid);  // affichage du slideshow des especes
											?>
										</div>
									</div>	
											<!-- AddThis Button BEGIN -->
										    <div id="boutons_partage">
										      <div class="addthis_toolbox addthis_default_style addthis_32x32_style" >
										          <a class="addthis_button_facebook"></a>
										          <a class="addthis_button_twitter"></a>
										          <a class="addthis_button_google_plusone_share"></a>
										          <a class="addthis_counter addthis_bubble_style"></a>
										      </div>
										    </div>
										    <!-- AddThis Button END -->		


									<div class="row-fluid">
										<div class="span12" id='blockDetailsEspece'>
											<?php 		 
													print views_embed_view('v_espece','block_1',$espnid);  // affichage details des especes
													
											?>
											</br>
										</div>
									</div>	

									<div class="row-fluid">
										<div class="span12" id='blockCriteresEspece'>
														<?php if(count($criteres) > 1) : ?>
																<?php  echo "<span class='views-label views-label-field-description' style='position:absolute;margin-top:-7px;'>Les indices pour le reconnaître</span>"; ?>
																<?php if(count($criteres) > 8) { echo "<div class='field-content' id='fieldPersoCriteria2line'>"; } else{echo "<div class='field-content' id='fieldPersoCriteria1line'>";}; ?>
																																
																<?php for($j=0; $j < count($criteres); $j++): ?>
																<?php $valEnCour = $criteres[$j][taxonomy_term]->name; ?>
																<?php switch ($valEnCour) {
																case "1.1-Coeur":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Coeur.png' alt='pictogramme de feuilles Coeur' /><span class='labelCrit'>Coeur</span></div>";
																break;
																case "1.2-Aiguille":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Aiguille.png' alt='pictogramme de feuilles Aiguille' /><span class='labelCrit'>Aiguille</span></div>";
																break; 
																case "1.3-Ovale":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Ovale.png' alt='pictogramme de feuilles Ovale' /><span class='labelCrit'>Ovale</span></div>";
																break;
																case "1.4-Lance":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Lance.png' alt='pictogramme de feuilles lance' /><span class='labelCrit'>Lance</span></div>";
																break;
																case "1.5-Ecaille":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Ecaille.png' alt='pictogramme de feuilles Ecaille' /><span class='labelCrit'>Ecaille</span></div>";
																break;  
																case "1.6-Lobée":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Lobe.png' alt='pictogramme de feuilles lobée' /><span class='labelCrit'>Lobée</span></div>";
																break;    
																case "2.1-Lisse":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Lisse.png' alt='pictogramme de feuilles lisse' /><span class='labelCrit'>Lisse</span></div>";
																break;        
																case "2.2-Denté":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Dentee.png' alt='pictogramme de feuilles lisse' /><span class='labelCrit'>Denté</span></div>";
																break;
																case "2.3-Denté et piquant":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Dentee_piquant.png' alt='pictogramme de feuilles alternée' /><span class='labelCrit'>Denté et piquant</span></div>";
																break;
																case "2.4-Crénelé":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Crenele.png' alt='pictogramme de fruit autre' /><span class='labelCrit'>Crénelé</span></div>";
																break;
																case "3.1-Alternée":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Alternee.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Alternée</span></div>";
																break;
																case "3.2-Opposée":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Opposee.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Opposée</span></div>";
																break;
																case "3.3-En bouquet":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/En_bouquet.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>En bouquet</span></div>";
																break;
																case "4.1-Gland":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Gland.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Gland</span></div>";
																break;
																case "4.2-Pomme de pin":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Pomme_de_pin.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Pomme de pin</span></div>";
																break;
																case "4.1-Gousse":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Gousse.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Gousse</span></div>";
																break;
																case "4.2-Clochette":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Clochette.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Clochette</span></div>";
																break;
																case "4.3-Baie":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Baie.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Baie</span></div>";
																break;
																case "4.4-Akène":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Akene.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Akène</span></div>";
																break;
																case "4.5-Grappe":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Grappe.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Grappe</span></div>";
																break;
																case "4.6-Autre":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Autres.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Autre</span></div>";
																break;
																case "5.1-Blanche":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Blanche.png' alt='pictogramme de fleur Blanche' /><span class='labelCrit'>Blanche</span></div>";
																break;
																case "5.2-Jaune":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Jaune.png' alt='pictogramme de fleur Jaune' /><span class='labelCrit'>Jaune</span></div>";
																break; 
																case "5.3-Vert":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Vert.png' alt='pictogramme de fleur Jaune' /><span class='labelCrit'>Vert</span></div>";
																break;
																case "5.4-Bleu-violace":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Bleu_violace.png' alt='pictogramme de fleur Jaune' /><span class='labelCrit'>Bleu-violacé</span></div>";
																break;
																case "5.5-Rose-violace":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Rose-violace.png' alt='pictogramme de fleur Jaune' /><span class='labelCrit'>Rose-violacé</span></div>";
																break;
																case "5.6-Marron-rouge":
																echo "<div class='1Crit'><img src='".$base_url."/sites/all/themes/ecobaladeTwitter/img/pictos/Marron-rouge.png' alt='pictogramme de fleur Jaune' /><span class='labelCrit'>Marron-rouge</span></div>";
																break;
																} ?>
																<?php endfor ?>    
																
																<?php  echo "</div>"; ?>
														<?php endif; ?>
													
										</div>
									</div>	
									
							</div>
							
							<div class="span3" id='aussiPresentDansBalade'>
									<?php 		 
												print ("<h2>Aussi présents dans d'autres balades</h2>");
												print views_embed_view('v_taxon_suivant_precedent','block_vsui',$baladenid);  // affichage du slideshow des especes
									?>
							</div>
						</div>		
						<?php print render($page['content']); ?>
				
		  </section>
		  
	  </div>
 </div><!-- fin container-node -->
  		
<?php print render($page['footer']); ?>

<script type="text/javascript">
jQuery( document ).ready(function() {
	
	if( $('.imageComment').length > 0 ) $('.imageComment').vanillabox();

	//Click sur bouton commenter
	$('section#comments section.collapseComment h2').click(function(){
		if ($('section#comments section.collapseComment form').is(':visible')) $('section#comments section.collapseComment form').hide();
		else $('section#comments section.collapseComment form').show();
	});

	
});
</script>

</div>
