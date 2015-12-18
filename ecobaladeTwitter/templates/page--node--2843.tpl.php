<!-- 
  
Template de la page liste des articles

-->
<link href='https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
<!-- Debut Widget Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Fin Widget Facebook -->


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

<?php global $base_url; ?>

<?php 
  if(isset($_GET['cat']) && $_GET['cat'] != '') $categorie = $_GET['cat']; 
  else $categorie = '';
?>

<?php 
  if(isset($_GET['tag']) && $_GET['tag'] != '') $tags = $_GET['tag'];
  else $tags = '';
?>

<?php 
  if($categorie == '' && $tags == '') $categorie = 'all';
?>


  <div class="blog-banner">
    <img src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/ecoblog_header_banner.png">
    <p>ecoblog</p>
    <p id="subtxt">Bienvenue sur le blog d'ecobalade</p>
  </div>

  <!--******************************************************-->
  <!--************************ MENU ************************-->
  <!--******************************************************-->
  <div class="navbarBlog navbar ">
    <nav class="navigationBlog navbar-inner">
      <ul class="navBlog nav">
        <?php
          //Les catégories
          $query = db_select('taxonomy_term_data', 't');
          $query->distinct();    
          $query->fields('t', array('name'));
          $query->fields('t', array('tid'));
          $query->join('field_data_field_cat_gorie', 'c', 't.tid = c.field_cat_gorie_tid');
          
          // Execution
          $items = $query->execute()->fetchAll();

          echo "<li><a href='$base_url/blog'>Accueil</a></li>";
          foreach ($items as $key => $value) {

            $nameCategorie = $value->name;
            $tid = $value->tid;
            echo "<li><a href='$base_url/blog?cat=$tid'>$nameCategorie</a></li>";       
          }    
          
          //Article mis en avant slider
          if ($categorie == '') $res = views_get_view_result("v_liste_article", $display_id = "block_5", $tags);
          else $res = views_get_view_result("v_liste_article", $display_id = "block_1", $categorie);
          
        ?>
        </ul>
    </nav>
  </div>

  <div class="swiper-container swiper-blog">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php  
          foreach ($res as $key => $value) { ?>
            <?php
              
              //Notre id courant d'article mis en avant
              $value->nid;

              //On charger notre article
              $currentArticle = node_load($value->nid);

              if ($currentArticle->field_mise_en_avant_value == 0) {

                //get title
                $title = $currentArticle->title;
                $created = format_date($currentArticle->created, $type = 'medium');              
                $blogCategorie = taxonomy_term_load($currentArticle->field_cat_gorie['und'][0]['tid'])->name;
                $blogResume = $currentArticle->body['und'][0]['safe_summary'];
                $blogContinuerLire = $currentArticle->view_node;
                
                // drupal_set_message( "<pre>" . print_r($currentArticle, TRUE) . "</pre>" );
                
                 $variables = array(
                  'style_name' => 'article_mis_en_avant_dans_slider',
                  'path' => $currentArticle->field_blog_image['und'][0]['uri'],
                  'alt' => $title
                );

                $blogImage = theme( 'image_style', $variables );
                //drupal_set_message( "<pre>" . print_r($blogImage, TRUE) . "</pre>" ); 
              }
            ?>

            <div class="swiper-slide ">
              <div class='row-fluid'>
                <div class="span12">
                  <a href="<?php echo $base_url.'/node/'.$value->nid; ?>"><?php echo $blogImage; ?></a>
                  <div class="blocLeftSwiper">
                    <div class="buttonSwiper">
                      <div class="swiper-button-prev"><a href="#"><</a></div>
                      <div class="swiper-button-next"><a href="#">></a></div>
                    </div>
                  </div>
                </div>
                <div class=" infoArticleBlog">
                  <h1><?php echo $title ?></h1>
                  <?php 
                    if ($currentArticle->field_sous_titre_blog != '') {
                    $subTitle = $currentArticle->field_sous_titre_blog['und'][0]['value'];
                    echo "<h2>".$subTitle."</h2>";
                    } ?>
                  <i><?php echo "Posté dans ".$blogCategorie." le ".$created ?></i>
                  <?php echo $blogResume ?>
                  <div class="likeShareComment">
                    <a href="#"><img id="imgLike" src=" <?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/heart-like.png" 
                             onmouseover="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/heart-likehover$-.png'" 
                             onmouseout="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/heart-like.png'"></a>

                    <a href="#"><img id="imgShare" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/share.png"
                             onmouseover="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/sharehover.png'" 
                             onmouseout="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/share.png'"></a> 

                    <a href="#"><img id="imgComment" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/bubule.png"
                             onmouseover="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/bubulehover.png'" 
                             onmouseout="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/bubule.png'"></a>
                  </div>
                  
                  
                  <a class="lirePlus" href="<?php echo $base_url.'/node/'.$value->nid; ?>"> Lire plus</a>
                </div>

              </div>
            </div> <!-- fin swiper-slide -->

            <?php } ?>

        
    </div>
    
    
    <!-- If we need navigation buttons -->
    
</div> <!-- fin swiper-blog -->


<div class="container listeArticle"> 

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	<?php //if ($breadcrumb): print $breadcrumb; endif;?>
      <a id="main-content"></a>
	<div class="container-node">
      <?php print render($title_prefix); ?>     
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
	<div class="row">
	  
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
        <!--<h1 class="page-header">--><?php //print $title; ?></h1>
      <?php //endif; ?>
      <?php //print render($title_suffix); ?>
      <?php //print $messages; ?>
      <?php if ($tabs): ?>
        <?php //print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      
        <?php 
          // 3 derniers articles
          if ($categorie == ''){
            $res = views_get_view_result("v_liste_article", $display_id = "block_4", $tags);
          }
          else $res = views_get_view_result("v_liste_article", $display_id = "block_2", $categorie);
          /*******************************************************************************/
          // drupal_set_message( "<pre>" . print_r(taxonomy_term_load($currentArticle->field_cat_gorie[und][0][name]), TRUE) . "</pre>" );
          /*******************************************************************************/

        ?>
      
        <div class="listeArticleBlog">
        <div class="row-fluid">
          <div class="span9"> <!-- debut 3 derniers articles -->
            <div class="enteteBlog">
              <h5>actualités</h5>
              <div></div>
            </div>
            <?php  
              foreach ($res as $key => $value) { ?>
                <?php
                  $value->nid;

                  //On charger notre article
                  $currentArticle = node_load($value->nid);
                  // drupal_set_message( "<pre>" . print_r($currentArticle, TRUE) . "</pre>" ); 
                  
                  //get title
                  $title = $currentArticle->title;
                  $created = format_date($currentArticle->created, $type = 'medium');              
                  $blogCategorie = taxonomy_term_load($currentArticle->field_cat_gorie['und'][0]['tid'])->name;
                  $blogResume = $currentArticle->body['und'][0]['safe_summary'];

                  $variables = array(
                    'style_name' => 'article_du_blog',
                    'path' => $currentArticle->field_blog_image['und'][0]['uri'],
                    'alt' => $title
                  );

                  $blogImage = theme( 'image_style', $variables );
                ?>

                
                <h1><?php echo $title ?></h1>
                <?php 
                  if ($currentArticle->field_sous_titre_blog != '') {
                    $subTitle = $currentArticle->field_sous_titre_blog['und'][0]['value'];
                    echo "<h2>".$subTitle."</h2>";
                  } ?>
                <i><?php echo "Posté dans ".$blogCategorie." le ".$created ?></i>
                <br>
                <a href="<?php echo $base_url.'/node/'.$value->nid; ?>"><?php echo $blogImage; ?></a>
                <p><?php echo $blogResume ?></p>
                <div class="likeShareCommentActu">
                  <a href="#"><img id="imgLike" src=" <?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/heart-like.png" 
                                    onmouseover="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/heart-likehover$-.png'" 
                                    onmouseout="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/heart-like.png'"></a>

                  <a href="#"><img id="imgShare" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/share.png"
                                    onmouseover="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/sharehover.png'" 
                                    onmouseout="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/share.png'"></a> 

                  <a href="#"><img id="imgComment" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/bubule.png"
                                    onmouseover="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/bubulehover.png'" 
                                    onmouseout="this.src='<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/img_blog/bubule.png'"></a>
                </div>
                <br/>
                <a class="lirePlus" href="<?php echo $base_url.'/node/'.$value->nid; ?>"> > Continuer de lire</a>
                <hr>


                <?php } ?>

            <div class="enteteArticleAssocies">
              <h5>articles associés</h5>
              <div></div>
            </div>

            <div class="row-fluid">
              <!-- mise en page 3 autre articles --> 

              <?php
                $query = db_select('node', 'n');
                $query->fields('n', array('nid'));
                $query->condition('n.type', 'blogosphere');
                $query->orderRandom();
                $query->range(0, 3);
                $items = $query->execute()->fetchAll();
                foreach ($items as $key => $value) { ?>
                <?php
                  $value->nid;

                  //On charger notre article
                  $currentArticle = node_load($value->nid);
                  
                  //get title
                  $title = $currentArticle->title;
                  $created = format_date($currentArticle->created, $type = 'medium');              
                  $blogCategorie = taxonomy_term_load($currentArticle->field_cat_gorie['und'][0]['tid'])->name;
                  $blogResume = $currentArticle->body['und'][0]['safe_summary'];

                  $variables = array(
                    'style_name' => 'article_associ_s',
                    'path' => $currentArticle->field_blog_image['und'][0]['uri'],
                    'alt' => $title
                  );

                  $blogImage = theme( 'image_style', $variables );
                ?>

                <div class="span4">
                  <a href="<?php echo $base_url.'/node/'.$value->nid; ?>"><?php echo $blogImage; ?></a>
                  <br>

                  <h1><?php echo $title ?></h1>
                  <i><?php echo "Posté dans ".$blogCategorie." le ".$created ?></i>
                  <p><?php echo $blogResume ?></p>
                  <br/><a class="lirePlus" href="<?php echo $base_url.'/node/'.$value->nid; ?>"> > Continuer de lire</a>
            
                </div>

                <?php } ?>
            </div>
            
          </div>
          
          <!--                     -->
          <!-- SIDEBARRE DE DROITE -->
          <!--                     -->    


          <div class="span3"> <!-- debut sidebarre droite -->
          <!-- debut bloc tags -->
            <div class="tagsBlog">
              <h4>catégories / tags</h4>
              <ul>
                <?php                
                  //Les catégories_secondaire
                  $query = db_select('taxonomy_term_data', 't');
                  $query->distinct();    
                  $query->fields('t', array('name'));
                  $query->fields('t', array('tid'));
                  $query->join('field_data_field_cat_gorie_secondaire', 'c', 't.tid = c.field_cat_gorie_secondaire_tid');
                  
                  // Execution
                  $items = $query->execute()->fetchAll();
                  foreach ($items as $key => $value) {
                    $nameTag = $value->name;
                    $tid = $value->tid;
                    echo "<li><a href='$base_url/blog?tag=$tid'>$nameTag</a></li>";       
                  }
                ?>
              </ul>
            </div>
            <!-- fin bloc tags -->

            <!-- debut bloc lien sponso -->
            <!-- <div class="tagsBlog">
              <h4>liens sponsorisés</h4>
            </div> -->
            <!-- fin bloc liens sponso -->

            <!-- debut bloc insta -->
            <div class="tagsBlog">
              <h4>instagram</h4>
              <!-- SnapWidget -->
              <iframe src="http://snapwidget.com/in/?u=ZWNvYmFsYWRlfGlufDgwfDN8M3x8bm98M3xmYWRlT3V0fG9uU3RhcnR8eWVzfG5v&ve=101215" title="Instagram Widget" class="snapwidget-widget largeScreen" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:249px; height:249px;"></iframe>
              <iframe src="http://snapwidget.com/sc/?u=ZWNvYmFsYWRlfGlufDgwfDN8M3x8eWVzfDIwfG5vbmV8b25TdGFydHx5ZXN8bm8=&ve=171215" title="Instagram Widget" class="snapwidget-widget smallScreen" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:200px; height:80px"></iframe>

            </div>
            <!-- fin bloc insta -->

            <!-- debut bloc FB -->
            <div class="tagsBlog">
              <h4>facebook</h4>
              <div class="largeScreen">
                <div class="fb-page" data-href="https://www.facebook.com/EcoBalade/" data-width="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/EcoBalade/">
                      <a href="https://www.facebook.com/EcoBalade/">EcoBalade</a>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="smallScreen">
                <div class="fb-page" data-href="https://www.facebook.com/EcoBalade/" data-width="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/EcoBalade/">
                      <a href="https://www.facebook.com/EcoBalade/">EcoBalade</a>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <!-- fin bloc FB -->

            <!-- debut bloc newsletter -->
            <!-- <div class="tagsBlog">
              <h4>newsletter</h4>
            </div> -->
            <!-- fin bloc newsletter -->

            <!-- debut bloc balade du mois -->
            <div class="baladeBlog">
              <h4>la balade du mois</h4>
              <div>
                <?php 
                  $query = db_select('node', 'n');
                  $query->fields('n', array('nid'));
                  $query->condition('n.type', 'balade');
                  $query->condition('n.promote', 0, '<>');
                  $items = $query->execute()->fetchAll();
                  $monNode = node_load($items[0]->nid);
                  $photoBalade = $monNode->field_photo_resume['und'][0]['uri'];
                  $titreBalade = $monNode->title;
                  $resumeBalade = $monNode->field_teaser['und'][0]['value'];
                   $variables = array(
                      'style_name' => 'medium',
                      'path' => $photoBalade,
                      'alt' => $titreBalade
                    );
                    $blogImageBalade = theme( 'image_style', $variables );
                 ?>
                <a href="<?php echo $base_url.'/node/'.$value->nid;?>"><?php echo $blogImageBalade; ?></a>
                <h5><a href="<?php echo $base_url.'/node/'.$value->nid;?>"><?php echo $titreBalade; ?></a></h5>
                <p><?php echo$resumeBalade; ?></p>
              </div>
            </div>
            <!-- fin bloc balade du mois -->
    
            <!-- debut bloc Don -->
            <!--<div class="tagsBlog">
                  <h4>Don</h4>
                </div> -->
            <!-- fin bloc don -->
          </div> <!-- fin sidebarre droite -->
        </div>
      </div>

      
	  </section>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
 </div> <!--fin container-node--> 

</div>
   <?php print render($page['footer']); ?>

<script type="text/javascript">
  
var galleryLogoOnEnParle = new Swiper('.swiper-blog', {       
        slidesPerView: 1,
        loopedSlides : 1, 
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev', 
        //slideToClickedSlide : true,                
        autoplay : 3500,
        loop: true
    });
</script>

