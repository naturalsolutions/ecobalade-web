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
  	  <?php render($page['content']['metatags']); ?>
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

<div id="img-front">
	<span class="txt-front">
		<h2>En balade ou en rando, découvrez la nature pas à pas...</h2>
		<p>Apprenez à reconnaître la faune et la flore facilement avec ecoBalade</p>
		
		<a id="btn-front" class="btn" target="" rel="" title="Les Balades" href="<?php echo $base_url; ?>/liste-balades">Trouver une balade</a>
	</span>
</div>


<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	
	<div class="row">
	  
    <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
	  
	  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
	  <div id="social_top">
	  <a rel="external" id="lien_facebook" href="https://www.facebook.com/EcoBalade" title="Suivez-nous sur Facebook" target="_blank"></a>
	  <a href="https://twitter.com/ecobalade" title="Suivez-nous sur Twitter" id="lien_twitter" target="_blank" rel="external"></a>
	  <a href="https://plus.google.com/106878953750776121381/posts" title="Suivez-nous sur Google+" id="lien_google" target="_blank" rel="external"></a>
	  <a href="http://m.pinterest.com/Ecobalade" title="Suivez-nous sur Pinterest" id="lien_pinterest" target="_blank" rel="external"></a>	  
	  <a href="http://instagram.com/ecobalade#" title="Suivez-nous sur Instagram" id="lien_instagram" target="_blank" rel="external"></a>
	  
	  
	  </div>
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?>
			
		</div>
      <?php endif; ?>
      <?php if ($breadcrumb): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
	  <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" id="accueil">
	  <div class="row-fluid">
			<div class="span6 hero-unit-teaser">
				<h1>En balade ou en rando, découvrez la nature pas à pas...</h1>
				<p style="text-align:left;">En <strong>randonnée</strong>, apprenez à reconnaître la <strong>faune</strong> et la <strong>flore</strong> facilement avec <strong>ecoBalade</strong>. Partagez vos découvertes et sortez ressourcés de cette aventure! Une nouvelle façon de vivre une <strong>balade</strong> dans la <strong>nature</strong></p>
					<div>
						<a class="span5 button" id='hp_button_android' target="_blank" rel="external" title="Télécharger l'application ecoBalade sur GooglePlay" href="https://play.google.com/store/apps/details?id=com.ns.ecoBalade&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5ucy5lY29CYWxhZGUiXQ.."><span class="icon-android"></span><em>ANDROID APP ON</em>Google play</a>
						<a class="span5 button" id='hp_button_apple' target="_blank" rel="external" title="Télécharger l'application sur l'appleStore" href="https://itunes.apple.com/fr/app/ecobalade/id674569147?l=fr&ls=1&mt=8"><span class="icon-apple"></span><em>Disponible sur</em>App Store</a>
						<a id="fold1BntAllBalades" class="span5 btn btn-primary btn-large" target="" rel="" title="Toutes les balades" href="<?php echo $base_path;?>liste-balades">Toutes les balades</a>
					</div>														
				</p>

			</div>
			<div class="span6">
				<?php $slideshow = views_embed_view('v_slideshow_accueil', 'block');?>
				<?php print render($slideshow);?>
			</div>
		</div> 
		</div>
			<div id="ancre2"></div>
		<hr>
	
	
	<!-- fold 3 -->
	<?php 
	
	//On get le nid de la balade promu
	$view = views_get_view('v_hp');
	$view->set_display('block');	
	$view->pre_execute();
	$view->execute();
	$objects = $view->result;

	//On charge la balade promu
	$nodeBaladePromu = node_load($objects[0]->nid);

	//On récupère nos champs	
	$title = $nodeBaladePromu->title;	
	$nidBaladepromu = $nodeBaladePromu->nid;	
	$field_distance = $nodeBaladePromu->field_distance['und'][0]['value'];
	$field_situation = $nodeBaladePromu->field_situation['und'][0]['value'];
	$field_description_de_la_balade = $nodeBaladePromu->field_balade_teaser['und'][0]['value'];

	//$field_description_de_la_balade = truncate_utf8($field_description_de_la_balade, $max_length = 500, $wordsafe = TRUE, $add_ellipsis = FALSE, $min_wordsafe_length = TRUE);
	$alter = array(
  		'max_length' => 500, //Integer
  		'ellipsis' => TRUE, //Boolean
  		'word_boundary' => TRUE, //Boolean
  		'html' => TRUE, //Boolean
  	);

	//$field_description_de_la_balade = views_trim_text($alter, $field_description_de_la_balade);
	//$field_description_de_la_balade = text_summary($field_description_de_la_balade, $format = NULL, $size = 500);
	$field_esp_ces_phares = $nodeBaladePromu->field_esp_ces_phares['und'];

	//Gen image style
	$variables = array(
	    'style_name' => 'balade_promu_728_420',
	    'path' => $nodeBaladePromu->field_photo_resume['und'][0]['uri'],
	    'width' => $nodeBaladePromu->field_photo_resume['und'][0]['width'],
	    'height' => $nodeBaladePromu->field_photo_resume['und'][0]['height'],
	    'title' => $nodeBaladePromu->field_photo_resume['und'][0]['title'],
		'alt' => $nodeBaladePromu->field_photo_resume['und'][0]['alt']
	);

	$imgPhotoBaladePromu = theme( 'image_style', $variables );
	

	?>

	<!-- Affichage -->
	<div class="row" id="fold3">

		<div class="span12">
			
			<div class="fleche-balade"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/balade/fleche-balade.png"/><p><?php echo $field_distance; ?>km<p/></div>
			<h2>En ce moment</h2>
			<ul class="filArianeBalade">				
				<?php if($field_situation != '') echo "<li><span class='labelLine'>France&nbsp></span></li><li><span class='labelLine'>$field_situation</span></li>"; ?>				
			</ul>		
			
		</div>




		<!-- Col1 -->
		<div class="span6 contenuEtiquette colFold3">
			<div class="etiquette">
				<p>La balade</p>
			</div>
			<div class="secondEtiquette">
				<p>du mois</p> 
			</div>
          <a href="<?php echo $base_path;?>balade/balade-la-roque-d-antheron-13-les-bords-de-la-durance" alt=""><?php echo $imgPhotoBaladePromu; ?></a>
        </div>



        <!-- Col2 -->
        <div class="span6 contenuDescroEspPhare colFold3">		

		<?php echo "<a href='$base_url/node/$nidBaladepromu' class='titleBaladePromu' title=\"$title\"><h3>$title</h3></a>"; ?>
          	<div class='descroOfPromuBalade'><?php echo $field_description_de_la_balade; ?></div>

			<div class="row-fluid zoneEspecePhotoBalade">

				<!-- On parcour les especes phares -->
				<?php foreach ($field_esp_ces_phares as $key => $value) {
					echo '<div class="span4">';
					
						//Pour chaque on récupère le nid
						$nidEspecePhare = $value['nid'];
						
						//Get info field image
						$field_photo_resume_espece_phare = field_get_items($entity_type = 'node', node_load($nidEspecePhare), $field_name = 'field_photo_resume'); 
						
						//Title image
						$title = $field_photo_resume_espece_phare[0]['title'];
						$alt = $field_photo_resume_espece_phare[0]['alt'];

						//Get title taxon
						$nodeTax = node_load($nidEspecePhare);
						$titleTax = $nodeTax->title;						
						
						//Charge une image par style
						$variables = array(
						    'style_name' => 'slideshow_detail_balade_full',
						    'path' => $field_photo_resume_espece_phare[0]['uri'],
						    'width' => $field_photo_resume_espece_phare[0]['width'],
						    'height' => $field_photo_resume_espece_phare[0]['height'],
						    'title' => $title,
							'alt' => $alt
						);
						//Notre image
						$field_photo_resume_espece_phare = theme( 'image_style', $variables );						
												
						//Affichage
						echo "<a href='$base_url/node/$nidEspecePhare' title=\"$title\" alt=\"$alt\"><span class='nameEspPhareBaladePromu'>$titleTax</span>$field_photo_resume_espece_phare</a>"; 

					echo '</div>';
				} ?>
				
			</div>
			<div class="row-fluid zoneBtnBalade">
				
				<div class="span12">					
					<a class=" btn btn-primary bnt-large" title="<?php echo $title; ?>" href="<?php echo $base_url."/node/".$nidBaladepromu; ?>">Détails de la balade</a> 
					<a class=" btn btn-primary bnt-large  inverse" title="Les balades" href="<?php echo $base_path;?>liste-balades">Toutes les balades</a>							
				</div>
					
			</div>
	  	</div> <!-- Fin Col2 -->


    </div> <!-- Fin fold 3-->
	<hr>
    <!-- fold 2 -->
    <div class="row" id="fold2">
		<h2>Comment ça marche ?</h2>
        <div class="span4">
          <h3>La clé de découverte</h3>
          <p>Vous ne connaissez pas certaines espèces que vous croisez sur votre <strong>balade</strong>? Identifiez-les grâce à la clé de découverte que nous avons imaginée : cochez les caractéristiques, validez et c’est trouvé !</p>
        </div>
        <div class="span4">
          <h3>Observez lors de la balade</h3>
          <p>Voir sans être vu, retrouver des signes de présence des animaux, décrire les plantes... Votre <strong>application</strong> vous accompagnera et vous donnera toutes les astuces pour mieux observer.</p>
         
        </div>
        <div class="span4">
          <h3>Partagez vos découvertes</h3>
          <p>Inscrivez-vous sur le site et partagez toutes vos découvertes. Avec l’Open Data, elles pourront à tout moment bénéficier aux réseaux <strong>naturalistes</strong> !</p>
		</div>
    </div>
	  
	  
	<div id="ancre3"></div>
	<hr>
	  	  
		 	 
	<h4>Les espèces observées</h4>
	<div class="row-fluid friseEspece" id="ancreFooter">
		<!-- https://github.com/tholman/intense-images -->
		
		
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/lapinou2.jpg" class="img-polaroid" data-title="<a href='espece/lapin-de-garenne' title='voir la fiche espèce'>Lapin de garenne</a>" data-caption="Présent dans la balade de <a href='balade/balade-de-la-belle-pierre' title='Voir la page balade'>la Belle Pierre</a>" id='lapinou'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/gabian1.jpg" data-title="Goéland argenté" data-caption="Présent dans la balade du Cap Sizun (prochainement)" class="img-polaroid" id='gabian'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/cerisier.jpg" data-title="<a href='espece/cerisier-de-sainte-lucie' title='voir la fiche espèce'>Cerisier de sainte Lucie</a>" data-caption="Présent dans la balade de <a href='balade/balade-du-parc-des-grottes-d-aze' title='Voir la page balade'>du parc des grottes d'Azé</a>" class="img-polaroid" id="cerisier"><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/Vergerette2.jpg" data-title="Vergerette" data-caption="Présentes en régions chaudes et tempérées" class="img-polaroid" id='vergerette'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/moineau.jpg" data-title="<a href='espece/moineau-domestique' title='voir la fiche espèce'>Moineau domestique</a>" data-caption="Présent dans la balade de <a href='balade/balade-de-la-mine-de-cap-garonne' title='Voir la page balade'>la Mine de Cap Garonne</a>" class="img-polaroid" id="moineau"><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/citron2.jpg" data-title="<a href='espece/citron-0' title='voir la fiche espèce'>Citron</a>" data-caption="Présent dans la balade de <a href='balade/balade-de-l-oppidum-montagne-sainte-victoire' title='Voir la page balade'>l'oppidum - Montagne Sainte-Victoire</a>" class="img-polaroid" id="citron"><div class="ajaxloader"></div></div>
		</div>
		
	</div>

	  <hr>
      <?php //print render($page['content']); ?>
	  </section>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  
</div>
<?php print render($page['footer']); ?>

<script>
jQuery( document ).ready(function() {


	var imagePolaroide = function(){

		// --> Image polaroide
		jQuery('.img-polaroid').click(function(){

			//affiche loader
			jQuery( this ).find('.ajaxloader').show();
				
		});
		
		window.onload = function() {
	
			// Intensify all images with the 'intense' classname.
			var elements = document.querySelectorAll( '.img-polaroid' );
			Intense( elements );
		
		}
		
	
	};
	

	imagePolaroide();


});

</script>