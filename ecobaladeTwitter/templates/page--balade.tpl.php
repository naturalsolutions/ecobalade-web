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

<?php 

global $base_url, $user; 

date_default_timezone_set('Europe/Paris');

$datePubli = format_date($timestamp = $node->created, $type = 'custom', $format = 'm/d/Y - H:i', $timezone = 'Europe/Paris'); 

//Date du jour
$today = new DateTime('NOW');

// On convertie la date de creation en formatDateTime pour diff php
$tabOfCreatedDate = explode('/', $datePubli); 

$day = $tabOfCreatedDate[1]; 
$month = strip_tags($tabOfCreatedDate[0]);
$tabOfCreatedDate1 = explode('-', $tabOfCreatedDate[2]); 
$year = trim($tabOfCreatedDate1[0]); 

//On creer notre deuxieme dateTime avec les valeur réperer en splitant la date created envioyé par la vue
$DateCreated = new DateTime();
$DateCreated->setDate($year, $month, $day);

//Comparaison des deux dates
$diff = $today->diff($DateCreated);
$nbDaysDiff = $diff->days; 

//Get node id pour la suite du template
$baladenid = $node->nid; 
?>

<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	  <?php if ($breadcrumb): echo "<div class='breadcrumb'><a href='".$base_url."'>Accueil</a>&nbsp»&nbsp<a href='".$base_url."/liste-balades' title='Liste des balades'>Balades</a>&nbsp»&nbsp".$title." </div>"; endif;?>
		
	
      <a id="main-content"></a>
	<div class="container-node">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header">
        	<?php print $title; ?>
        	<?php //Si le nombre de jour < 60, cad 2 mois alors on affiche le logo nouvelle balade
			if($nbDaysDiff < 60) echo "<p class='newBalade'>Nouveau !</p>";
 	  ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>	   
	  <?php print $messages; ?>
	<div class="row">
	  
    <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
	   <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
     
	  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  	  
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      
     
		<!--- ONGLETS -->
		<ul class="nav nav-tabs" id="myTab">
			<li class="active">
				<a  class="description" href="#description" data-toggle="tab" >Description</a>
			<!---	<a  data-toggle="tab" data-target="#description">Description</a> -->
			</li>
			<li><a class="espece" href="#espece" data-toggle="tab" >Espèces</a></li>
			<a class="btn pull-right back-page btn-primary" target="" rel="" title="Retour à la liste des balades" href="<?php echo $base_path;?>liste-balades">Retour à la liste des balades</a>
		</ul> 
		<div class="tab-content">
		<div class="tab-pane active" id="description"> 
		
			<!-- *****SLIDESHOW DETAIL BALADE****** -->
			 <?php 			
			print views_embed_view('v_slideshow_detail_balade','block',$baladenid); 
			?> 
			
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
				
				
			<!-- Boc texte description de la balade -->
			<div id="descriptionZone">	
			<h4>Description de la balade&nbsp;:&nbsp;</h4>
			<?php $description = field_get_items($entity_type = 'node', $node, $field_name = 'field_description_de_la_balade'); ?>
			<?php $description = $description[0]['value']; ?>				
			<?php echo $description; ?>
			</div>

			<!-- Boc espece phare de la balade -->
			<div class="especes-phares">
				<h4>Espèces phares&nbsp;:&nbsp;</h4>
				<?php $especesPhares = field_get_items($entity_type = 'node', $node, $field_name = 'field_esp_ces_phares'); ?>										
				<div class="row-fluid">
				<?php for($i=0;$i<count($especesPhares);$i++) { 
					
					$nodeEspecePhare = node_load($especesPhares[$i]['nid']);
					$TitlePhotoResumeEspecePhare = $nodeEspecePhare->field_photo_resume['und'][0]['title'];
					//$AltPhotoResumeEspecePhare = $nodeEspecePhare->field_photo_resume['und'][0]['alt'];
					$urlPhotoResumeEspecePhare = file_create_url($nodeEspecePhare->field_photo_resume['und'][0]['uri']);

					$variables = array(
				        'style_name' => 'slideshow_detail_balade_full',
				        'path' => $nodeEspecePhare->field_photo_resume['und'][0]['uri'],
				        'width' => $nodeEspecePhare->field_photo_resume['und'][0]['width'],
				        'height' => $nodeEspecePhare->field_photo_resume['und'][0]['height'],
				        'title' => $nodeEspecePhare->field_photo_resume['und'][0]['title'],
						'alt' => $nodeEspecePhare->field_photo_resume['und'][0]['alt']
					);
					
					$imgPhotoResumeEspecePhare = theme( 'image_style', $variables );
					$nidPhotoResumeEspecePhare = $nodeEspecePhare->nid;

					//Affichage	
					echo "<div class='span4'>";
						echo '<figure class="effect-zoe">';
							echo "<a href='$base_url/node/$nidPhotoResumeEspecePhare' title=\"$TitlePhotoResumeEspecePhare\">$imgPhotoResumeEspecePhare</a>";
							echo "<a href='$urlPhotoResumeEspecePhare' class='imageTaxon' title=\"$TitlePhotoResumeEspecePhare\"></a>";
							echo "<figcaption>";
								echo "<a title='Visiter la page' href='$base_url/node/$nidPhotoResumeEspecePhare'><h3>$nodeEspecePhare->title</h3></a>";											
							echo '</figcaption>';
						echo '</figure>';
					echo "</div>";
					
				} ?>
				</div>					

			</div>

			<?php

			$field_balade_google_map‎ = field_get_items($entity_type = 'node', $node, $field_name = 'field_balade_google_map');
			echo "<div class='row-fluid googleMap'><div class='span12'>".$field_balade_google_map‎[0]['value']."</div></div>";

			//Affichage du reste du node
			print render($page['content']); 
			?>			
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Test2 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:728px;height:90px"
		     data-ad-client="ca-pub-4110701213934425"
		     data-ad-slot="5564062399"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>

		<!-- Conteneur de l'onglet Espece -->
		<div class="tab-pane" id="espece">					
			
			<div class="row-fluid">
				<div class="span12" id='les_picto_balades'>
				

					<div title='Toutes les espèces' id='resetAllFilterOnTaxa'>Tout</div>					

					<?php
					//On get la balade courante
					$currentNode = node_load($baladenid); 
					//On va y chercher le champs espèces
					$allEspeceOftheNode = $currentNode->field_esp_ces['und'];
					//Tableau de tid utilisé plus tard
					$arrayOfLabelOfGrpTaxo = array();

					//Pour chaque espece
					foreach ($allEspeceOftheNode as $key => $value) {
						
						//Get nid
						$nidOfEspece = $value['nid'];						

						//Charge espece node
						$nodeCurrentSpecie = node_load($nidOfEspece);				

						//Get All tid des groupes taxo
						array_push($arrayOfLabelOfGrpTaxo, taxonomy_term_load($nodeCurrentSpecie->field_groupe_taxonomique['und'][0]['tid'])->name);						

					}

					$arrayOfLabelOfGrpTaxo = array_unique($arrayOfLabelOfGrpTaxo);

					foreach ($arrayOfLabelOfGrpTaxo as $key => $value) {
												
						switch ($value) {
							case 'Amphibiens':
								$label_picto = 'picto_amphibien';
							break;

							case 'Araignées':
								$label_picto = 'picto_insect';
							break;

							case 'Petites bêtes':
								$label_picto = 'picto_insect';
							break;

							case 'Mammifères':
								$label_picto = 'picto_mamifere';
							break;

							case 'Reptiles':
								$label_picto = 'picto_reptile';
							break;

							case 'Oiseaux':
								$label_picto = 'picto_oiseaux';
							break;

							case 'Mollusque':
								$label_picto = 'picto_mollusque';
							break;

							case 'Arbres':
								$label_picto = 'picto_arbre';
							break;

							case 'Arbustes et plantes':
								$label_picto = 'picto_arbuste';
							break;	

							default:							
							break;
						}
						
						echo "<div title='$value' id='$label_picto'></div>";
					}

					?>

				</div>
			</div>
					
			<?php print views_embed_view('v_liste_taxon_balade','block_list_espece',$baladenid);?>
			
	
		</div>
	</div>
	
	
	</section>
	<!-- *****ASIDE RIGHT****** -->
    <?php if ($page['sidebar_second']): ?>
      <aside class="span3 region-sidebar-second" role="complementary">
       <?php if ($node): ?>  
	    <a id="btn-esp" class="btn btn-primary" alt="lien vers la liste des espèces" href="#" title="Les espèces a découvrir" >Espèces à découvrir</a>
		
		<?php 

			//si pas guide
			if($node->field_lien_guide['und'][0]['value'] == 'mailto:contact@natural-solutions.eu'){
				
				echo "<h2>Randonner avec un guide ?</h2>"; 				
				
			} 
			//si guide
			else {

				echo "<h2>Randonner avec un guide !</h2>"; 
			}

			$url_image_guide = file_create_url($node->field_img_guide['und'][0]['uri']);
			$name_image_guide = $node->field_img_guide['und'][0]['filename'];
			$link_image_guide = $node->field_lien_guide['und'][0]['value'];
			
			echo "<a href='$link_image_guide' alt='$name_image_guide'><img alt='$name_image_guide' title='$name_image_guide' src='$url_image_guide' /></a>";
			
		?>

		<?php if($node->field_lien_guide['und'][0]['value'] == 'mailto:contact@natural-solutions.eu'): ?>
			<a id="btn-guide" class="btn btn-primary" target="" rel="" title="Contactez-nous" href="mailto:contact@natural-solutions.eu">Vous êtes guides, rejoignez-nous !</a>
		<?php endif; ?>
		

		
		
		<?php print views_embed_view('v_caracteristiques_balade','block_1',$baladenid);?>
		<br/>
		<div align="center" class='pubAdsens'>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Annonce logement balade -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-4110701213934425"
			     data-ad-slot="1589691194"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<!-- <a href="https://clk.tradedoubler.com/click?p=117553&a=2794210&g=21636760" rel="nofollow" target="_BLANK"><img src="https://impfr.tradedoubler.com/imp?type(img)g(21636760)a(2794210)" border=0></a> -->
		<h2>Localisation</h2>
		<?php print views_embed_view('v_map_localisation_balade','block',$baladenid);?>
		<h2>Informations pratiques</h2>
		<?php print views_embed_view('v_informations_pratiques_balade','block',$baladenid);?>
		
		<div id="baladeSimilaire">
		<h2>Balades similaires</h2>
		<?php 
		
		//On recupère la difficulté
		$difficulte = $node->field_difficulte['und'][0]['taxonomy_term']->tid;

		//On charge la vue qui nous renvoie  5 ID balade avec même diffifculté
		$view = views_get_view('v_balade_similaire');
		$view->set_display('block');
		$view->set_arguments(array($difficulte));		
		$view->pre_execute();
		$view->execute();
		$objects = $view->result;

		//Parcour des id balades
		foreach ($objects as $key => $value) {
			
			$nodeBaladeSim = node_load($value->nid);
			
			//On get les infos qui nous intéresses (title, image)
			$title = $nodeBaladeSim->title;			
			$imgbaladeSim = field_get_items($entity_type = 'node', $nodeBaladeSim, $field_name = 'field_photo_resume');
			$url = file_create_url($imgbaladeSim[0]['uri']);

			$variables = array(
			    'style_name' => 'slideshow_detail_balade_full',
			    'path' => $imgbaladeSim[0]['uri'],
			    'width' => $imgbaladeSim[0]['width'],
			    'height' => $imgbaladeSim[0]['height'],
			    'title' => $imgbaladeSim[0]['title'],
				'alt' => $imgbaladeSim[0]['alt']
			);

			//Notre image
			$imgbaladeSim = theme( 'image_style', $variables );

			
			//Affichage	
			echo '<figure class="effect-zoe">';
				echo "<a href='$base_url/node/$value->nid' title=\"$title\">$imgbaladeSim</a>";
				echo "<a href='$url' class='imageBaladeSim' title=\"$title\"></a>";
				echo "<figcaption>";
					echo "<a title='Visiter la page' href='$base_url/node/$value->nid'><h3>$title</h3></a>";											
				echo '</figcaption>';
			echo '</figure>';
		

		}

		?>
		</div>
					
	<?php endif; ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
 </div><!-- fin container-node -->


	</div>
  <?php print render($page['footer']); ?>
<script type="text/javascript">
jQuery( document ).ready(function() {

	
	//LightBox pour commentaires/*
	if( $('.imageComment').length > 0 ) $('.imageComment').vanillabox({		
		closeButton: false,
		loop: true,
		repositionOnScroll: true,
		type: 'image',
		adjustToWindow: 'both'
    });

 	//LightBox pour especes phares
	if( $('.imageTaxon').length > 1 ){
		
		$('.imageTaxon').vanillabox({		
			
			closeButton: false,
			loop: true,
			repositionOnScroll: true,
			type: 'image',
			adjustToWindow: 'both'
    	
    	});	
	} 

	//LightBox pour balades similaire
	if( $('.imageBaladeSim').length > 1 ){
		
		$('.imageBaladeSim').vanillabox({		
			
			closeButton: false,
			loop: true,
			repositionOnScroll: true,
			type: 'image',
			adjustToWindow: 'both'
    	
    	});	
	} 

	//Click sur bouton commenter
	$('section#comments section.collapseComment .title').click(function(){
		if ($('section#comments section.collapseComment form').is(':visible')) $('section#comments section.collapseComment form').hide();
		else $('section#comments section.collapseComment form').show();
	});


	//Lors clic sur bouton espece a decouvrir
	$('#btn-esp').click(function(){
		$('a.espece').trigger('click');
	});

});
</script>

<script>
  $(function () {
  		
  		var currentUrl = document.URL;
  		var spliter = currentUrl.split("#");
  		if(spliter[1] == 'espece') $('#myTab a:last').tab('show');
  
  })
</script>

<!-- FILTRE ALL ESPECE -->
<script>
  $('#resetAllFilterOnTaxa').click(function() {
    $(".Insectes").parent().parent().show();
    $(".Mammifères").parent().parent().show();
    $(".Reptiles").parent().parent().show();
    $(".Oiseaux").parent().parent().show();
    $(".Arbres").parent().parent().show();
    $(".Arbustes.et.plantes").parent().parent().show();
    $(".Mollusque").parent().parent().show();
	$(".Amphibiens").parent().parent().show();
	
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
});
</script>
<!-- FILTRE ANIMAUX -->
<script>
  $('#picto_oiseaux').click(function() {
    $(".Oiseaux").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
	$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border-bottom","1px solid #55BB79");
		
	
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
	
});  
</script>
<script>
 $('#picto_mamifere').click(function() {
    $(".Mammifères").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
	$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border-bottom","1px solid #55BB79");
			
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
});  
</script>
<script>
  $('#picto_reptile').click(function() {
    $(".Reptiles").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border-bottom","1px solid #55BB79");		
	
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
});  
</script>
<script>
 $('#picto_insect').click(function() {
    $(".Insectes").parent().parent().show();
    $(".Reptiles").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border-bottom","1px solid #55BB79");
	
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
}); 
</script>
<script>
    $('#picto_mollusque').click(function() {
    $(".Mollusque").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border-bottom","1px solid #55BB79");
	
	$("#picto_amphibien").css("border","none");
}); 
</script>
<script>
    $('#picto_amphibien').click(function() {
	$(".Amphibiens").parent().parent().show();
    $(".Mollusque").parent().parent().hide();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border-bottom","1px solid #55BB79");
		
	
}); 
</script>

<!-- FILTRE VEGETAUX -->
<script>
  $('#picto_arbre').click(function() {
    $(".Arbres").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border-bottom","1px solid #55BB79");
		
	
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
}); 
</script>
<script>
    $('#picto_arbuste').click(function() {
    $(".Arbustes.et.plantes").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border-bottom","1px solid #55BB79");
		
	
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
}); 
</script>
<!-- FILTRE CHAMPIGNON -->

