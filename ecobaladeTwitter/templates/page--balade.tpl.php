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
			<?php if ($logo) : ?>
				<a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php endif; ?>

			<?php if ($site_name || $site_slogan) : ?>
				<hgroup id="site-name-slogan">
					<?php if ($site_name) : ?>
						<h1>
							<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
						</h1>
					<?php endif; ?>
				</hgroup>
			<?php endif; ?>

			<div class="nav-collapse pull-right">
				<nav role="navigation">
					<?php if ($primary_nav) : ?>
						<?php print $primary_nav; ?>
					<?php endif; ?>

					<?php if ($search) : ?>
						<?php if ($search) : print render($search);
							endif; ?>
					<?php endif; ?>

					<?php if ($secondary_nav) : ?>
						<?php print $secondary_nav; ?>
					<?php endif; ?>
				</nav>
			</div>
		</div>
	</div>
</header>

	<!-- // fin TOP header -->
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
		<?php if ($site_slogan) : ?>
			<p class="lead"><?php print $site_slogan; ?></p>
		<?php endif; ?>

		<?php print render($page['header']); ?>
	</header>
	
	<?php if ($breadcrumb) : echo "<div class='breadcrumb'><a href='" . $base_url . "'><img src=\"../../sites/all/themes/ecobaladetwitter/img/pictos/icone_home.svg\"></a>&nbsp»&nbsp<a href='" . $base_url . "/liste-balades' title='Liste des balades'>Balades</a>&nbsp»&nbsp" . $title . " </div>";
	endif; ?>

	<a id="main-content"></a>
	<div class="container-node">
		<?php print render($title_prefix); ?>
		<?php if ($title) : ?>
			<h1 class="page-header">
				<?php print $title; ?>
				<?php //Si le nombre de jour < 60, cad 2 mois alors on affiche le logo nouvelle balade
					if ($nbDaysDiff < 60) echo "<p class='newBalade'>Nouveau !</p>"; ?>
			</h1>
		<?php endif; ?>
		<?php print render($title_suffix); ?>
		<?php print $messages; ?>

		<!-- TABS VOIR / MODIFIER ... -->
		<div class="row" style="margin: 0px">
			<?php if ($tabs) : ?>
				<?php print render($tabs); ?>
			<?php endif; ?>
			<?php if ($page['help']) : ?>
				<div class="well"><?php print render($page['help']); ?></div>
			<?php endif; ?>
			<?php if ($action_links) : ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>

			<!--- ONGLETS BALADE / ESPECES -->
			<div>
				<?php
				$currentPath = drupal_get_path_alias($path = current_path());
				$currentPath = explode('/', $currentPath);
				$currentPath = $currentPath[1];
				?>
				<ul class="nav nav-tabs onglets" id="myTab">
					<li class="active">
						<a class="description" href="#description" data-toggle="tab">Balade</a>
					</li>

					<li>
						<a class="description" data-toggle="tab" href="#species">Espèces</a>
					</li>

					<?php $result = views_get_view_result('v_all_patrimoine', 'patrimoine_block', $baladenid);
					if (isset($result[0])) : ?>
						<li>
							<a class="description" href="#patrimoine" data-toggle="tab">Patrimoine</a>
						</li>
					<?php endif; ?>
					<!-- <a class="btn pull-right back-page btn-primary" target="" rel="" title="Retour à la liste des balades" href="<?php /* echo $base_path; */ ?>liste-balades">Retour à la liste des balades</a> -->
				</ul>
			</div>

			<?php if ($page['sidebar_first']) : ?>
				<aside class="span3 test" role="complementary">
					<?php print render($page['sidebar_first']); ?>
				</aside> <!-- /#sidebar-first -->
			<?php endif; ?>
			<?php if ($page['highlighted']) : ?>
				<div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
			<?php endif; ?>

			<section class="span12">
				<div class="tab-content">
					<div class="tab-pane active" id="description">
						<!-- SLIDER IMAGES BALADE -->
						<div class="slideshow">
							<?php
							print views_embed_view('v_slideshow_detail_balade', 'block', $baladenid);
							?>
						</div>

						<!-- INFOS BALADE -->
						<div class="caracteristiques_balades">
							<?php print views_embed_view('v_caracteristiques_balade', 'block_1', $baladenid); ?>
						</div>

						<!-- GOOGLE MAPS -->
						<?php
						$field_balade_google_map‎ = field_get_items($entity_type = 'node', $node, $field_name = 'field_balade_google_map');
						echo "<div class='row-fluid googleMap'><div class='span12'>" . $field_balade_google_map‎[0]['value'] . "</div></div>";
						?>

						<!-- Boc texte description de la balade -->
						<div id="descriptionZone" class="zoneDescription">
							<!-- <h2>Description de la balade</h2> -->
							<?php $description = field_get_items($entity_type = 'node', $node, $field_name = 'field_description_de_la_balade'); ?>
							<?php $description = $description[0]['value']; ?>
							<?php echo $description; ?>
						</div>

						<div class="infos_pratiques">
							<h3>Informations pratiques</h3>
							<?php print views_embed_view('v_informations_pratiques_balade', 'block', $baladenid); ?>
						</div>

						<div class="google-map">
							<!-- GOOGLE MAP 3D + COMMENTAIRE -->
							<?php print render($page['content']);
							// affichage reste du node
							?>
						</div>
					
					</div> <!-- Fin active -->

					<!-- Conteneur de l'onglet Patrimoine -->
					<div class="tab-pane" id="patrimoine">

						<?php print views_embed_view('v_all_patrimoine', 'patrimoine_block', $baladenid);  ?>

					</div><!-- fin #patrimoine -->

					<!-- Conteneur de l'onglet Especes -->
					<div class="tab-pane" id="species">
						<!-- especes pahres -->
						<div class="accordion" id="accordion2">

							<div class="especes-phares accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#especes-phares">
										<h3>Espèces phares</h3>
									</a>
								</div>
								<div id="especes-phares" class="accordion-body collapse in">
									<div class="accordion-inner">
										<?php $especesPhares = field_get_items($entity_type = 'node', $node, $field_name = 'field_esp_ces_phares'); ?>


										<div class="row-fluid">
											<?php for ($i = 0; $i < count($especesPhares); $i++) {

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

												$imgPhotoResumeEspecePhare = theme('image_style', $variables);
												$nidPhotoResumeEspecePhare = $nodeEspecePhare->nid;
												$nidPhotoResumeEspecePhare = drupal_get_path_alias('node/' . $nidPhotoResumeEspecePhare);

												//Affichage	
												echo "<div class='span4'>";
												echo '<figure class="effect-zoe">';
												echo "<a href='$base_url/$nidPhotoResumeEspecePhare' title=\"$TitlePhotoResumeEspecePhare\">$imgPhotoResumeEspecePhare</a>";
												echo "<a href='$urlPhotoResumeEspecePhare' class='imageTaxon' title=\"$TitlePhotoResumeEspecePhare\"></a>";

												echo "<figcaption>";
												echo "<a title='Visiter la page' href='$base_url/$nidPhotoResumeEspecePhare'><p>$nodeEspecePhare->title</p></a>";
												echo '</figcaption>';
												echo '</figure>';
												echo "</div>";
											} ?>
										</div>
									</div>
								</div>
							</div>

							<div class="especes-balade accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#especes-balade">
										<h3>Espèces de la balade</h3>
									</a>
								</div>
								<div id="especes-balade" class="accordion-body collapse">
									<div class="accordion-inner">
										<?php /* if ($breadcrumb): echo "<div class='breadcrumb'><a href='".$base_url."'><img src=\"../../sites/all/themes/ecobaladetwitter/img/pictos/icone_home.svg\"></a>&nbsp»&nbsp<a href='".$base_url."/liste-balades' title='Liste des balades'>Balades</a>&nbsp»&nbsp".$title." </div>"; endif; */ ?>

										<?php
										global $base_url;
										$isFilterBalade = false;

										if (isset($_GET['balade']) && $_GET['balade'] != '') {
											$isFilterBalade = true;

											$titleBalade = $_GET['balade'];
											$titleBaladeMachine = $titleBalade;
											$titleBalade = 'balade/' . $titleBalade;
											$titleBalade = drupal_get_normal_path($titleBalade);
											$titleBalade = explode('/', $titleBalade);
											$nidBalade = $titleBalade[1];
											$titleBalade = node_load($nidBalade);
											$titleBalade = $titleBalade->title;
											//drupal_set_title($title = $title.' - '.$titleBalade);
										} else $nidBalade = 'all';

										?>

										<a id="main-content"></a>
										<div class="container-node">
											<div class="row-fluid">
												<section class="span12">

													<?php
													//Liste des balades publiés        
													try {

														$query = db_select('node', 'n');
														$query->innerjoin('url_alias', 'ua', "ua.source = CONCAT('node/', n.nid)");
														$query->condition('n.status', 1, '=')
															->condition('n.type', 'balade', '=')
															->fields('n', array('title', 'nid'))
															->fields('ua', array('alias'))
															->orderBy('created', 'DESC');

														$result = $query->execute();
													} catch (Exception $e) {

														drupal_set_message(t("Sorry, they are an error in the query."), 'error');
													}; ?>

													<div id="filterBalade" class="selectBalade views-exposed-widget views-exposed-form">
														<p>Rechercher ici votre espèce</p><br />
														<label for="selectBalade">Par balade</label>
														<select id="selectBalade" name="select">
															<option value='balade/all'>Toutes</option>

															<?php while ($record = $result->fetchAssoc()) {

																if ($nidBalade == $record['nid']) echo "<option selected='selected' value='" . $record['alias'] . "'>" . $record['title'] . "</option>";
																else echo "<option value='" . $record['alias'] . "'>" . $record['title'] . "</option>";
															} ?>
														</select>
													</div>

													<div class="row-fluid">
														<div class="span12" id='blockAllEspeces'>
															<?php
															if ($nidBalade == 'all') print views_embed_view('v_all_especes', 'block_1');
															else print views_embed_view('v_all_especes', 'block_all_especes', $nidBalade);
															?>
														</div>
													</div>
												</section>
											</div><!-- fin row-fluid -->
										</div> <!-- fin container-node -->
									</div>
								</div>
							</div>
				</div>
				<!-- Balades similaires -->
				<div class="baladeSimilaire">
					<div class="accordion-heading">
						<h3>Balades similaires</h3>
					</div>
					<div id="balades-similaires">
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
							$imgbaladeSim = theme('image_style', $variables);

							//remplacer le node par le alias
							$loadPathBalade = drupal_get_path_alias('node/' . $value->nid);

							//Affichage	
							echo '<figure class="effect-zoe">';
							echo "<a href='$base_url/$loadPathBalade' title=\"$title\">$imgbaladeSim</a>";
							echo "<a href='$url' class='imageBaladeSim' title=\"$title\"></a>";
							echo "<figcaption>";
							echo "<a title='Visiter la page' href='$base_url/$loadPathBalade'><p>$title</p></a>";
							echo '</figcaption>';
							echo '</figure>';
						} ?>
					</div>
				</div>
			</section>

			<!-- *****ASIDE RIGHT****** -->
			<?php if ($page['sidebar_second']) : ?>
				<!-- <aside class="span12 region-sidebar-second visible-desktop" role="complementary">
				<h3>Informations pratiques</h3>	
				<?php /* print views_embed_view('v_informations_pratiques_balade','block',$baladenid); */ ?>
		</aside -->
				<!-- /#sidebar-second -->
			<?php endif; ?>

		</div>
	</div><!-- fin container-node -->


</div>
<?php print render($page['footer']); ?>
<script type="text/javascript">
	jQuery(document).ready(function() {


		//LightBox pour commentaires/*
		if ($('.imageComment').length > 0) $('.imageComment').vanillabox({
			closeButton: false,
			loop: true,
			repositionOnScroll: true,
			type: 'image',
			adjustToWindow: 'both'
		});

		//LightBox pour especes phares
		/* 	if( $('.imageTaxon').length > 1 ){
				
				$('.imageTaxon').vanillabox({		
					
					closeButton: false,
					loop: true,
					repositionOnScroll: true,
					type: 'image',
					adjustToWindow: 'both'
		    	
		    	});	
			}  */

		//LightBox pour balades similaire
		/* 	if( $('.imageBaladeSim').length > 1 ){
				
				$('.imageBaladeSim').vanillabox({		
					
					closeButton: false,
					loop: true,
					repositionOnScroll: true,
					type: 'image',
					adjustToWindow: 'both'
		    	
		    	});	
			} */

		//LightBox pour patrimoines
		if ($('.imagePatrimoine').length > 1) {

			$('.imagePatrimoine').vanillabox({

				closeButton: false,
				loop: true,
				repositionOnScroll: true,
				type: 'image',
				adjustToWindow: 'both',

			});
		}

		//Click sur bouton commenter
		$('section#comments section.collapseComment .title').click(function() {
			if ($('section#comments section.collapseComment form').is(':visible')) $('section#comments section.collapseComment form').hide();
			else $('section#comments section.collapseComment form').show();
		});

	});
</script>

<script>
	$(function() {

		var currentUrl = document.URL;
		var spliter = currentUrl.split("#");
		if (spliter[1] == 'espece') $('#myTab a:last').tab('show');

	});
</script>
<!-- N'AFFICHE PAS LA LISTE DES "PATRIMOINES" -->
<script>
	$('.field.field-name-field-reference-patrimoine.field-type-node-reference.field-label-above').hide();
</script>