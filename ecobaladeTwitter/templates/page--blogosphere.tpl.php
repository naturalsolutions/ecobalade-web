<!-- 
  
Template d'un article de blog

-->
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

<?php global $base_url, $node; ?>
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
  
  <?php 
      $res = views_get_view_result("v_liste_article", $display_id = "block_1");
  ?> 

  <!--******************************************************-->
  <!--************************ MENU ************************-->
  <!--******************************************************-->
  <div class="navbarBlog navbar ">
    <nav class="navigationBlog navbar-inner">
      <ul class="navBlog nav">
        <?php  
          //drupal_set_message( "<pre>" . print_r($items, TRUE) . "</pre>" ); 
          
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

<div class="container">
  <div class="row-fluid">
    <div class="container-node span9">
      <!-- début coprs de l'article -->
      <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
        <?php           
          $nodeId = arg(1);
          // echo $nodeId;
         //$titre = field_view_value($entity_type  = 'node', $entity = $node, $field_name = 'title', $item, $display = array(), $langcode = NULL);
          //$titre = field_get_items($entity_type = 'node', $node, $field_name = 'title'); 
          drupal_set_message("<pre>".print_r("aaaa".$nodeId,TRUE)."</pre>");
          //drupal_set_message("<pre>".print_r("bbb".$titre,TRUE)."</pre>");
        ?>
        <h1><?php echo $title; ?>555556</h1>  
        <?php if ($page['highlighted']): ?>
          <!-- <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div> -->
        <?php endif; ?>
        <?php //if ($breadcrumb): print $breadcrumb; endif;?>
        <!--<a id="main-content"></a>-->
        <?php //print render($title_prefix); ?>
        <?php //if ($title): ?>
          <!--<h1 class="page-header">--><?php //print $title; ?></h1>
        <?php //endif; ?>
        <?php //print render($title_suffix); ?>
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
        <?php print render($page['content']); ?>

  	  </section>

      <!-- fin coprs de l'article -->
    </div> <!--fin container-node-->
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
      <!-- debut bloc insta -->
      <!-- <div class="tagsBlog">
        <h4>instagram</h4>
        <iframe src="http://snapwidget.com/in/?u=ZWNvYmFsYWRlfGlufDgwfDN8M3x8bm98M3xmYWRlT3V0fG9uU3RhcnR8eWVzfG5v&ve=101215" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:249px; height:249px;"></iframe>
      </div> -->
      <!-- fin bloc insta -->

      <!-- debut bloc FB -->
      <!-- <div class="tagsBlog">
        <h4>facebook</h4>
        <div class="fb-page" data-href="https://www.facebook.com/EcoBalade/" data-width="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/EcoBalade/">
              <a href="https://www.facebook.com/EcoBalade/">EcoBalade</a>
            </blockquote>
          </div>
        </div>
      </div> -->
      <!-- fin bloc FB -->
      <!-- debut bloc balade du mois -->
      <!-- <div class="baladeBlog">
        <h4>la balade du mois</h4>
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
      </div> -->
      <!-- fin bloc balade du mois -->
    </div> <!-- fin sidebarre droite -->
  </div>
</div>
   <?php print render($page['footer']); ?>

<script type="text/javascript">
	
var galleryLogoOnEnParle = new Swiper('.swiper-blog', {       
        slidesPerView: 1,
        loopedSlides : 1, 
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev', 
        //slideToClickedSlide : true,                
        autoplay : 2500,
        loop: true
    });

</script>