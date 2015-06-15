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


<?php global $base_url; 
//On test si l'on vient d'une page balade pour proposer un fil d'arianne complet
if (isset($_GET["idlastbal"])){
	
	$nid_bal_last = $_GET["idlastbal"];
	$node_bal_last = node_load($nid_bal_last);
	
	$breadcrumb = '<div class="breadcrumb"><a href="'.$base_url.'/">Accueil</a> » <a href="'.$base_url.'/node/'.$nid_bal_last.'">'.$node_bal_last->title.'</a> » '.$node->title.'</div>';
	
}
?>


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
						
							$TabOfSaisonValue = $node->field_saison['und'];
							$TabOfTimeVisibiliteValue = $node->field_visible['und'];
							$TabOfVisibilityValue = $node->field_visible['und'];

					}?>			  
						

						<div class="row-fluid">
							<div class="span9" id='blockEspece'>
							
									<div class="row-fluid">
										<div class="span12" id='blockTitleEsp'>
											<?php 		 
													if($groupe_tax == "Arbustes et plantes"){
														print ("<div title='Arbustes et plantes' class='pictoGroupeTax' id='picto_Arbustes'></div>");
													}else{
														print ("<div class='pictoGroupeTax' title='".$groupe_tax."' id='picto_".$groupe_tax."'></div>");
													}
													print ("<p id='nom_scf'>".$nom_scf."</p>");
											?>
											<a class="btn-back-list-espece btn btn-primary" title="Retour à la liste des espèces" href="<?php echo $base_path;?>liste-especes">Retour à la liste des espèces</a>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span12" id='blockSlideEsp'>
											<div class="row-fluid">
											<?php 		 
											
											//On récupere les photos
											$field_image = field_get_items($entity_type = 'node', $node, $field_name = 'field_image'); 
																						
											//Si pas d'image
											if(empty($field_image) || count($field_image) < 2){

												

												//On définit notre format
												$variables = array(
											        'style_name' => 'slideshow_detail_balade_full',
											        'path' => $node->field_photo_resume['und'][0]['uri'],
											        'width' => $node->field_photo_resume['und'][0]['width'],
											        'height' => $node->field_photo_resume['und'][0]['height'],
											        'title' => $node->field_photo_resume['und'][0]['title'],
											        'attributes' => $arrayName = array('class' => 'pictureWhenNoSlider' ),										        
													'alt' => $node->field_photo_resume['und'][0]['alt'],
												);
												
												$imgPhotoResumeTaxon = theme( 'image_style', $variables );
												//affiche simple photo
												echo $imgPhotoResumeTaxon;

											}else{
												
												echo '<div class="span10">';
													echo "<div class='swiper-container gallery-top'>";
								 						echo "<div class='swiper-wrapper'>";
													    
													//Affiche slideshow
			

																									    
													    foreach ($field_image as $key => $value) {
													    	
													    	//drupal_set_message( "<pre>" . print_r($value['uri'], TRUE) . "</pre>" ); 
													    	$variables = array(
														        'style_name' => 'slideshow_detail_balade_full',
														        'path' => $value['uri'],
														        'width' => $value['width'],
														        'height' => $value['height'],
														        'title' => $value['title'],
														        'attributes' => $arrayName = array('class' => 'pictureSlider' ),										        
																'alt' => $nom_scf
															);

													       	$imgPhotoResumeTaxon = theme( 'image_style', $variables );
													    	
													    	 // Slides
													        echo "<div class='swiper-slide'>$imgPhotoResumeTaxon</div>";
													        

													    }

													    echo "</div>"; // fin swiper-wrapper
													    
													    echo '<div class="swiper-button-next swiper-button-white"></div>';
	        											echo '<div class="swiper-button-prev swiper-button-white"></div>';

													echo "</div>"; //fin swiper-container
												echo "</div>"; 



												//Thumbnails
												echo '<div class="span2">';
							 						echo '<div class="swiper-container gallery-thumbs">';
												        echo '<div class="swiper-wrapper">';
												        	foreach ($field_image as $key => $value) {												        		

													    		$imageThumb = file_create_url($value['uri']);
													    		
													    		// Slides													        
												        		echo "<div class='swiper-slide' style='background-image:url($imageThumb)'></div>";

														    }

												        echo '</div>';
												    echo '</div>';
											    echo '</div>';
											    
											
											} 											
													
											?>
											</div> <!-- fin row-fluid -->
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



											<?php $son = field_get_items($entity_type = 'node', $node, $field_name = 'field_son'); ?>
											
											<?php 
											if(!empty($son)){
												
												$son = file_create_url($son[0]['uri']);												
												print ("
												<audio preload='auto' title='Chant du $node->title' controls='controls'>												  
												  <source src='$son' type='audio/mp3' />
												  <span style='text-align:center;display:block;'>ø</span>
												</audio>
												");
											
											} 
											?>

											<?php $description = field_get_items($entity_type = 'node', $node, $field_name = 'field_description'); ?>
											<?php $description = $description[0]['value']; ?>				
											<h4>Description : </h4>
											<p><?php echo $description; ?></p>											
										</div>
									</div>	

									<?php if(count($criteres) > 1) : ?>
									<div class="row-fluid">
										<div class="span12" id='blockCriteresEspece'>
													<?php  echo "<h4 class='labelKey'>Les indices pour le reconnaître</h4>"; ?>
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
										</div>
									</div>	<!-- Fin du row-fluid des critere -->	
									<?php endif; ?>													

									<!-- Saisonalité -->
									<?php 
									//test si il a des valeurs de saisonalité
									if(count($TabOfSaisonValue) > 0 || count($TabOfTimeVisibiliteValue) > 0): ?>

									<?php if(count($TabOfSaisonValue) > 0 ): ?>

									<?php 
									echo "<div id='valueSaisonHidden'>";
									$currentMonth = date('m');
									foreach ($TabOfSaisonValue as $key => $value) {
									
										if($value['value'] == $currentMonth) $isNow = true;
										echo "<div class='hidden'>$value[value]</div>";

									}
									echo "</div>"; // fin valueSaisonHidden 
									?>
									<?php endif; ?>

										<div class="row-fluid">
											    <div class="span12" id="containerOfSaisonalite">												
													<div class='row-fluid'>
													
													<?php if(count($TabOfSaisonValue) > 0 ): ?>
													<div class="span4">

														<?php 
														//test si c'est une plante
														if($groupe_tax == 'Arbustes et plantes' || $groupe_tax == 'Arbres') echo "<h4>Période de floraison</h4>";
														else echo "<h4>Présence</h4>";																				
														
														?>
														
														<div class="row-fluid">

															<?php 
															$currentMonth =  date('m'); 

															switch ($currentMonth) {
																case '01':
																	$currentMonth = 'Janvier';
																break;
																case '02':
																	$currentMonth = 'Février';
																break;
																case '03':
																	$currentMonth = 'Mars';
																break;
																case '04':
																	$currentMonth = 'Avril';
																break;
																case '05':
																	$currentMonth = 'Mai';
																break;
																case '06':
																	$currentMonth = 'Juin';
																break;
																case '07':
																	$currentMonth = 'Juillet';
																break;
																case '08':
																	$currentMonth = 'Août';
																break;
																case '09':
																	$currentMonth = 'Septembre';
																break;
																case '10':
																	$currentMonth = 'Octobre';
																break;
																case '11':
																	$currentMonth = 'Novembre';
																break;
																case '12':
																	$currentMonth = 'Décembre';
																break;
															
																default:
																	# code...
																	break;
															}
															
															?>

															<div class="row-fluid">
																<div class="span12">																			
																	<p class='currentMonth'><?php echo $currentMonth; ?></p>
																	<?php 
																	if($groupe_tax == 'Arbustes et plantes' || $groupe_tax == 'Arbres') {
																		
																		if($isNow) echo "<p class='labelCurrentMonth'>En fleur ce mois ci</p>";
																		else echo "<p class='labelCurrentMonth'>Pas en fleur ce mois ci</p>";
																	}
																	else {
																		
																		if($isNow) echo "<p class='labelCurrentMonth'>Visible ce mois ci</p>";	
																		else echo "<p class='labelCurrentMonth'>Pas visible ce mois ci</p>";	
																	}
																	?>
																	<span class='lineSeparator'></span>
																</div>
															</div>

															<div class="row-fluid">
																<div class="row-fluid labelMois">
																	<div id='01' class="span3">Jan</div>
																	<div id='02' class="span3">Fév</div>
																	<div id='03' class="span3">Mar</div>
																	<div id='04' class="span3">Avr</div>
																</div>

																<div class="row-fluid labelMois">
																	<div id='05' class="span3">Mai</div>
																	<div id='06' class="span3">Jui</div>
																	<div id='07' class="span3">Juil</div>
																	<div id='08' class="span3">Aoû</div>
																</div>
																
																<div class="row-fluid labelMois">
																	<div id='09' class="span3">Sep</div>
																	<div id='10' class="span3">Oct</div>
																	<div id='11' class="span3">Nov</div>
																	<div id='12' class="span3">Dec</div>
																</div>																																			
															</div>

														</div> <!--	fin row-fluid -->											
													</div> <!-- fin span4 -->

													<?php endif; ?>
													<?php if(count($TabOfTimeVisibiliteValue) > 0): ?>

													<div class="span8">
														<h4>Présence</h4>
														<div class="row-fluid">
															<div class="span6">																
																<div class="row-fluid">
																	<?php
																	$nbitemTimeValue = count($TabOfTimeVisibiliteValue);
																	switch ($nbitemTimeValue) {
																		case 1:
																			$spanNumber = 'span12';
																			$allstyle = 'background-size: 38%;background-position: 60% 49%;';
																		break;

																		case 2:
																			$spanNumber = 'span6';
																			//$allstyle = 'background-size: 80%;';
																		break;

																		case 3:
																			$spanNumber = 'span4';
																			$allstyle = 'background-position-y:46%;';
																		break;																		
																		
																		default:
																		# code...
																		break;
																	}
																	foreach ($TabOfTimeVisibiliteValue as $key => $value) {
																		
																		$val = $value['value'];																	
																		$hour = date('H');
																		$hour = intval($hour);

																		if($hour > 5 && $hour < 8 && $val == 'matinee') $isTime = true;
																		if($hour >= 8 && $hour < 18 && $val == 'journee') $isTime = true;
																		if($hour >= 18 && $hour < 22 && $val == 'soiree') $isTime = true;
																		if($hour >= 22 && $hour < 5 && $val == 'nuit') $isTime = true;

																		if($val == $currenTime) $isTime = true;

																		if($nbitemTimeValue < 4) {	

																			if($nbitemTimeValue == 2 && $val == 'journee') $allstyle = 'background-size: 70%;';
																			else if($nbitemTimeValue == 2) $allstyle = 'background-size: 80%;';

																			echo "<div style='$allstyle' class='$spanNumber $val' title='$val'>";
																				switch ($val) {
																					
																					case 'matinee':
																						echo 'A l\'aube';
																					break;

																					case 'journee':
																						echo 'En journée';
																					break;

																					case 'soiree':
																						echo 'Crépuscule';
																					break;

																					case 'nuit':
																						echo 'La nuit';
																					break;
																					
																					default:
																					# code...
																					break;
																				}
																			echo "</div>";

																		}
																		else{

																			if($key == 0){

																				echo "<div class='span12 jourNuit' title='jourNuit'>";
																					echo 'Jour & Nuit';
																				echo "</div>";																				

																			}
																		}

																	}
																	?>																	
																</div>															
															</div>															
															<div class="span6">
																<?php 
																																
																if($isTime && $isNow) echo "<div class='visibleEnCeMoment'>Visible en ce moment</div>";	
																else echo "<div class='InvisibleEnCeMoment'>Pas visible en ce moment</div>";	
															
																?>																
															</div>
														</div>
													</div> <!-- fin span8 -->	
													<?php endif; ?>											
												</div> <!-- fin row-fluid -->														
											</div> <!-- fin containerOfSaisonalite -->									
										</div> <!-- fin row-fluid Saisonalité -->	 
									
									<?php endif; ?>		
									
							</div> <!-- fin bloc espece -->
							
							<!-- On execute la vue qui nous renvoie la liste des id de balades associé à l'espèce courante -->
							<div class="span3" id='aussiPresentDansBalade'>
								
								<?php 		 								
								$view = views_get_view('v_taxon_suivant_precedent');
								$view->set_display('block_1');
								$view->set_arguments(array($espnid));
								//$view->set_items_per_page(3);
								$view->pre_execute();
								$view->execute();
								$objects = $view->result;
								?>
								
								<!-- Test s'il y a des valeurs -->
								<?php if($objects[0]->field_esp_ces_node_nid): ?>
									<div class="blocBalade">
									
										<h4>A retrouver dans cette balade</h4>
										<?php 

										//Charge node de la balade
										$nodeBalade = node_load($objects[0]->field_esp_ces_node_nid);	
										
										//Récuperation des info dans la variable $nodeBalade 
										$url = file_create_url($nodeBalade->field_photo_resume['und'][0]['uri']);
										$alt = $nodeBalade->field_photo_resume['und'][0]['alt'];
										$title = $nodeBalade->field_photo_resume['und'][0]['title'];

										//Affichage												
										echo '<figure class="effect-zoe">';
											echo "<a href='$base_url/node/$nodeBalade->nid' title=\"$title\"><img title=\"$nodeBalade->title\" src='$url' alt='$alt'/></a>";
											echo "<a href='$url' class='imageBalade' title=\"$title\"></a>";
											echo "<figcaption>";
												echo "<a class='visitBalade' title=\"$nodeBalade->title\" href='$base_url/node/$nodeBalade->nid'><h2>$nodeBalade->title</h2></a>";											
											echo '</figcaption>';
										echo '</figure>';

																					
										?>			
									</div> <!-- fin blocBalade -->
								<?php endif; ?>

								<div class="blocTaxon">

									<h4>A découvrir</h4>
									<?php 		 
									$view = views_get_view('v_taxon_suivant_precedent');
									$view->set_display('block_vsui');									
									$view->pre_execute();
									$view->execute();
									$objects = $view->result;

									foreach ($objects as $key => $value) {
										
										//Charge node taxon
										$nodeTaxon = node_load($value->nid);

										//Récuperation des info dans la variable $nodeTaxon 
										$url = file_create_url($nodeTaxon->field_photo_resume['und'][0]['uri']);
										$alt = $nodeTaxon->field_photo_resume['und'][0]['alt'];
										$title = $nodeTaxon->field_photo_resume['und'][0]['title'];

										if($title =='') $title = $nodeTaxon->title;
										

										//Affichage	
										echo '<figure class="effect-zoe">';
											echo "<a href='$base_url/node/$nodeTaxon->nid' title=\"$title\"><img title=\"$nodeTaxon->title\" src='$url' alt='$alt'/></a>";
											echo "<a href='$url' class='imageTaxon' title=\"$title\"></a>";
											echo "<figcaption>";
												echo "<a title='Visiter la page' href='$base_url/node/$nodeTaxon->nid'><h2>$nodeTaxon->title</h2></a>";											
											echo '</figcaption>';
										echo '</figure>';								
									
									}
									
									?>

								</div> <!-- fin blocTaxon -->
							</div> <!-- fin aussiPresentDansBalade -->

						</div>		
						<?php print render($page['content']); ?>
				
		  </section>
		  
	  </div>
 </div><!-- fin container-node -->
  		
  	

<script type="text/javascript">
jQuery( document ).ready(function() {

	(function($, viewport){

		// Execute code each time window size changes
	    $(window).resize(
	        viewport.changed(function(){

	        	console.log($(window).width());
	        	if($(window).width() < 963) {

	        		if('div.swiper-container.gallery-thumbs.swiper-container-vertical')	$('div.swiper-container.gallery-thumbs').removeClass('swiper-container-vertical').addClass('swiper-container-horizontal');

	        	}
	        	else {
	        		if('div.swiper-container.gallery-thumbs.swiper-container-horizontal') $('div.swiper-container.gallery-thumbs').removeClass('swiper-container-horizontal').addClass('swiper-container-vertical');
	        	}

	        })
	    )

	})(jQuery, ResponsiveBootstrapToolkit);

	
	//slideshow 
	var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',            
        effect : 'fade'
    });
    

    if($(window).width() < 968){    	

    	var galleryThumbs = new Swiper('.gallery-thumbs', {	    	
	        virtualTranslate : true,	        
	        direction : 'horizontal',
	        centeredSlides: true,
	        slidesPerView: 'auto',
	        touchRatio: 0.2,
	        loop: true,    
	        slideToClickedSlide: true
	    });	        	
    	
    }else{

    	//Au dessus de 968px de large
    	var galleryThumbs = new Swiper('.gallery-thumbs', {	    	
	        virtualTranslate : true,	        
	        direction : 'vertical',
	        centeredSlides: true,
	        slidesPerView: 'auto',
	        touchRatio: 0.2,
	        loop: true,    
	        slideToClickedSlide: true
	   	});
    }

    
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;


	//Saisonalité - On parcour les 12 mois
	$('.labelMois .span3').each(function(index, el) {
	
		var monthTotest = $(this).attr('id');
		var blocMonthTotest = $(this);
		
		//pour chaque mois, on va tester s'il existe une valeur dans les champs cachés
		$('#valueSaisonHidden > div').each(function(index, el) {
			
			//console.log( $(this).val() );
			if(monthTotest == $(this).text()) blocMonthTotest.addClass('saisonOn');
		
		});

	});

	//Si on souhaite afficher le form pour le mobile 
	if(window.location.hash == '#commenter'){
		$('section#comments section.collapseComment form').show();		
		
		$('html, body').animate({
        	scrollTop: $("#comments").offset().top
    	}, 0);
	}


    //LightBox pour imageBalade espece     
	if( $('.imageBalade').length > 0 ){
		
		$('.imageBalade').vanillabox({		
			
			closeButton: false,
			loop: true,
			repositionOnScroll: true,
			type: 'image',
			adjustToWindow: 'both'
    
    	});	
	
	} 
    //LightBox pour imageTaxon espece     
	if( $('.imageTaxon').length > 0 ){
		
		$('.imageTaxon').vanillabox({		
			
			closeButton: false,
			loop: true,
			repositionOnScroll: true,
			type: 'image',
			adjustToWindow: 'both'
    	
    	});	
	} 

	if( $('.imageComment').length > 0){
	    //LightBox pour imageComment espece     
		$('.imageComment').vanillabox({		
		
			closeButton: false,
			loop: true,
			repositionOnScroll: true,
			type: 'image',
			adjustToWindow: 'both'
	    
	    });
	}
	
	
  

	//Click sur bouton commenter
	$('section#comments section.collapseComment h2').click(function(){
		if ($('section#comments section.collapseComment form').is(':visible')) $('section#comments section.collapseComment form').hide();
		else $('section#comments section.collapseComment form').show();
	});

	
});
</script>

</div>
<?php print render($page['footer']); ?>
