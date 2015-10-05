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
<a name="top-anchor"></a>
<div class='swiper-container galleryTopHp'>
	
	<span class="txt-front">
		<h2>En balade ou en rando, découvrez la nature pas à pas...</h2>
		<p>Apprenez à reconnaître la faune et la flore facilement avec ecoBalade</p>
		
		<a id="btn-front" class="btn" target="" rel="" title="Les Balades" href="<?php echo $base_url; ?>/liste-balades">Trouver une balade</a>
	</span>

	<div class='swiper-wrapper'>

		<!-- Slides -->
		<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/fold1HP/img01_700.jpg" title="photo de nature - ecobalade" alt="photo de nature - ecobalade"></div>	
		<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/fold1HP/img02_700.jpg" title="photo de nature - ecobalade" alt="photo de nature - ecobalade"></div>	
		<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/fold1HP/img03_700.jpg" title="photo de nature - ecobalade" alt="photo de nature - ecobalade"></div>	
		

	</div>

	<div class='progressBar'></div>
</div> <!-- fin swiper-container -->

<!--
<div id="img-front">
	
</div>
-->

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
						<a class="span5 buttonStore" id='hp_button_android' target="_blank" rel="external" title="Télécharger l'application ecoBalade sur GooglePlay" href="https://play.google.com/store/apps/details?id=com.ns.ecoBalade&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5ucy5lY29CYWxhZGUiXQ.."><span class="icon-android"></span><em>ANDROID APP ON</em>Google play</a>
						<a class="span5 buttonStore" id='hp_button_apple' target="_blank" rel="external" title="Télécharger l'application sur l'appleStore" href="https://itunes.apple.com/fr/app/ecobalade/id674569147?l=fr&ls=1&mt=8"><span class="icon-apple"></span><em>Disponible sur</em>App Store</a>
						<a id="fold1BntAllBalades" class="span5 btn btn-primary btn-large" target="" rel="" title="Toutes les balades" href="<?php echo $base_path;?>liste-balades">Toutes les balades</a>
					</div>														
				</p>

			</div>
			<div class="span6">				
				
				<div class='swiper-container galleryFold2'>
					<div class='swiper-wrapper'>

						<!-- Slides -->
						<div class='swiper-slide'>
							<img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/slideshow-accueil/scenario-1_0.jpg" title="Envie de nature…" alt="Illustration partir en balade">							 
				            <div class="text" data-swiper-parallax="-100%" data-swiper-parallax-duration="600">
				              <p>Envie de nature…</p>
				            </div>
						</div>	

						<div class='swiper-slide'>
							<img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/slideshow-accueil/scenario-2_0.jpg" title="…essayer quelque chose de nouveau ?" alt="Illustration partir en balade">
							<div class="text" data-swiper-parallax="-100%" data-swiper-parallax-duration="600">
				              <p>…essayer quelque chose de nouveau ?</p>
				            </div>
						</div>	

						<div class='swiper-slide'>
							<img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/slideshow-accueil/scenario-3_0.jpg" title="Découvrez les trésors cachés de la nature, chez vous ou en vacances," alt="Illustration partir en balade">
							<div class="text" data-swiper-parallax="-100%" data-swiper-parallax-duration="600">
				              <p>Découvrez les trésors cachés de la nature, chez vous ou en vacances,</p>
				            </div>
						</div>	
						
						<div class='swiper-slide'>
							<img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/slideshow-accueil/scenario-4_0.jpg" title="Avec ecoBalade, rencontrez les espèces, leurs histoires, et devenez le champion du parcours !" alt="Illustration partir en balade">
							<div class="text" data-swiper-parallax="-100%" data-swiper-parallax-duration="600">
				              <p>Avec ecoBalade, rencontrez les espèces, leurs histoires, et devenez le champion du parcours !</p>
				            </div>
						</div>	
						
						<div class='swiper-slide'>
							<img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/slideshow-accueil/scenario-5_0.jpg" title="Sortez, la nature vous attend…" alt="Illustration partir en balade">
							<div class="text" data-swiper-parallax="-100%" data-swiper-parallax-duration="600">
				              <p>Sortez, la nature vous attend…</p>
				            </div>
						</div>							

					</div>

					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>

				</div> <!-- fin swiper-container -->		


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
	$pathBaladePromu = drupal_get_path_alias($path = 'node/'.$nidBaladepromu, $path_language = NULL);
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
            <?php echo "<a href='$base_url/$pathBaladePromu' title='$title' alt='$title'>$imgPhotoBaladePromu</a>";  ?>
        </div>



        <!-- Col2 -->
        <div class="span6 contenuDescroEspPhare colFold3">		

		<?php echo "<a href='$base_url/node/$nidBaladepromu' class='titleBaladePromu' title=\"$title\"><h3>$title</h3></a>"; ?>
          	<div class='descroOfPromuBalade'><p><?php echo $field_description_de_la_balade; ?></p></div>

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
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/lapinou2.jpg" class="img-polaroid" data-title="<a href='espece/lapin-de-garenne' title='voir la fiche espèce'>Lapin de garenne</a>" data-caption="Présent dans la balade de <a href='balade/balade-de-la-seyne-sur-mer-83-foret-de-janas-la-belle-pierre' title='Voir la page balade'>la Belle Pierre</a>" id='lapinou'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/gabian1.jpg" data-title="<a href='espece/goeland-argente' title='Goéland argenté'>Goéland argenté</a>" data-caption="Présent dans la balade du <a href='balade/balade-en-bretagne-la-reserve-du-cap-sizun-29' title='Voir la page balade du Cap Sizun'>Cap Sizun</a>" class="img-polaroid" id='gabian'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/cerisier.jpg" data-title="<a href='espece/cerisier-de-sainte-lucie' title='voir la fiche espèce'>Cerisier de sainte Lucie</a>" data-caption="Présent dans la balade de <a href='balade/balade-du-parc-des-grottes-d-aze-71' title='Voir la page balade'>du parc des grottes d'Azé</a>" class="img-polaroid" id="cerisier"><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/Vergerette2.jpg" data-title="Vergerette" data-caption="Présentes en régions chaudes et tempérées" class="img-polaroid" id='vergerette'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/moineau.jpg" data-title="<a href='espece/moineau-domestique' title='voir la fiche espèce'>Moineau domestique</a>" data-caption="Présent dans la balade de <a href='balade/balade-du-pradet-83-mine-de-cap-garonne' title='Voir la page balade'>la Mine de Cap Garonne</a>" class="img-polaroid" id="moineau"><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/citron2.jpg" data-title="<a href='espece/citron' title='voir la fiche espèce'>Citron</a>" data-caption="Présent dans la balade de <a href='balade/balade-montagne-sainte-victoire-balade-saint-antonin-13-sur-l-oppidum' title='Voir la page balade'>l'oppidum - Montagne Sainte-Victoire</a>" class="img-polaroid" id="citron"><div class="ajaxloader"></div></div>
		</div>
		
	</div>
	  
	</section>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  
</div> <!-- fin container -->

<div class="container-fluid" id="foldOnEnParle">
	
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<h4>On en parle</h4>
				<span class='lineLabel'></span>
			</div>
		</div>
		<div class="row-fluid">
			<div class='swiper-container galleryLogoOnEnParle'>
				<div class='swiper-wrapper'>

					<!-- Slides -->
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-europe1.jpg" alt="logo du journal d'Europe1"></div>	
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-france-info.jpg" alt="logo de france info"></div>
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-lecho.jpg" alt="logo du journal L'Echo"></div>
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-Elle.jpg" alt="logo du journal Elle"></div>
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/Logo-20-Minutes.jpg" alt="logo du journal 20 Minutes"></div>	
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/france3-paca.jpg" alt="logo du journal de france 3 PACA"></div>	
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-la-provence.jpg" alt="logo du journal de la Provence"></div>	
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-Ventilo.jpg" alt="logo du journal Ventilo"></div>
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-city-post.jpg" alt="logo du blog Citypost"></div>			
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo_hebdo_square.jpg" alt="logo du journal L'Hebdo"></div>	
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo-tour-mag.jpg" alt="logo du journal tour mag"></div>	
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/Logo_La_Voix_du_Nord.jpg" alt="logo du journal La voix du Nord"></div>	
					<div class='swiper-slide'><img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/logo_fold_on_en_parle/logo_var_matin.jpg" alt="logo du journal Var Matin"></div>	

				</div>
			</div> <!-- fin swiper-container -->				
		</div>
	</div>

</div> <!-- fin foldOnEnParle -->
<?php print render($page['footer']); ?><script>
jQuery( document ).ready(function() {

	
	//slideshow on en parle
	var galleryTopHp = new Swiper('.galleryTopHp', {       
        slidesPerView: 1,
        effect : 'fade',        
        autoplay : 5000,
        loopedSlides : 3, 
        touchRatio : 0,
        simulateTouch :false,
        loop: true,

        onSlideChangeStart(galleryTopHp){
        	
	  		$('.progressBar').css('width','0');
        	$('.progressBar').animate({	width : '100%' }, 5000, function(){});
        }
        
    });
		
    //slideshow on en parle
	var galleryLogoOnEnParle = new Swiper('.galleryLogoOnEnParle', {       
        slidesPerView: 4,
        spaceBetween : 200,        
        loopedSlides : 4, 
        //slideToClickedSlide : true,                
        autoplay : 2500,
        loop: true
    });

    //slideshow illustration fold2
	var galleryLogoOnEnParle = new Swiper('.galleryFold2', {       
        slidesPerView: 1,
        effect : 'fade',        
        loopedSlides : 5,        
        paginationClickable : true, 
        parallax : true,
        autoplay : 2500,        
        pagination : '.galleryFold2 .swiper-pagination',        
        loop: true
    });


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