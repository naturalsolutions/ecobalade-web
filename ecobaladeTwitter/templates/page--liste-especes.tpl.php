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
<div class="usageCookie">
  <p>En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des services et des offres adaptés à vos centres d’intérêts. <span class='closeBtn'>Fermer</span></p>
</div>

<div class="fakeDivheightUsageCookie">
  <p>En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des services et des offres adaptés à vos centres d’intérêts. <span class='closeBtn'>Fermer</span></p>
</div>
<?php 
global $base_url; 
$isFilterBalade = false;

if(isset($_GET['balade']) && $_GET['balade'] != '') {
  $isFilterBalade = true;
  
  $titleBalade = $_GET['balade'];
  $titleBaladeMachine = $titleBalade;
  $titleBalade = 'balade/'.$titleBalade;
  $titleBalade = drupal_get_normal_path($titleBalade);
  $titleBalade = explode('/', $titleBalade);
  $nidBalade = $titleBalade[1];
  $titleBalade = node_load($nidBalade);
  $titleBalade = $titleBalade->title;
  //drupal_set_title($title = $title.' - '.$titleBalade);
}

else $nidBalade = 'all';

?>

<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

        <?php
          //on a définit un drupal_set_title pour ajouter le nom du balade, il faut les sépérer ici
          //$titleBreadcrumb = explode('-', $title, 2);
         // echo $titleBreadcrumb[0];

            //$listeEspeces = $titleBreadcrumb[0];

           if ($breadcrumb && $_GET['balade'] != ''){ echo "<div class='breadcrumb'><a href='".$base_url."'>Accueil</a> »
            <a href='".$base_url."/balade/".$titleBaladeMachine."'>".$titleBalade."</a> » ".$title."</div>";
            
           } else {
            print $breadcrumb;
          };
        ?>

      <a id="main-content"></a>
	<div class="container-node">
        <?php print render($title_prefix); ?>
        <?php if($title && $titleBalade): ?>
          <h1 class="page-header"><?php echo $title; ?></h1><h2><?php echo 'Présentes dans la '.$titleBalade; ?></h2>
        <?php elseif($title): ?>
          <h1 class="page-header"><?php echo $title; ?></h1><h2>Présentes dans toutes les balades</h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
  	  <?php print $messages; ?>
  	   <?php print $messages; ?>


    		<div class="row-fluid">	
    			<section class="span12">
          
            <div class="row-fluid">
              <div class="span12" id='slideShowAllEspeces'>
                <?php 
                    print views_embed_view('v_all_especes','block_slideshow', $nidBalade);  
                ?>
              </div>
            </div>

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
            
            } ;?>
              
            <div id="filterBalade" class="selectBalade views-exposed-widget views-exposed-form">
            <p>Rechercher ici votre espèce</p><br/>
            <label for="selectBalade">Par balade</label>
              <select id="selectBalade" name="select">
                  <option value='balade/all'>Toutes</option> 
              
                  <?php while($record = $result->fetchAssoc()) {
                    
                    if($nidBalade == $record['nid']) echo "<option selected='selected' value='".$record['alias']."'>".$record['title']."</option>";          
                    else echo "<option value='".$record['alias']."'>".$record['title']."</option>";          
                  
                  } ?>
             </select>
           </div>


    				<div class="row-fluid">
    					<div class="span12" id='blockAllEspeces'>
    						
                <?php
                if($nidBalade == 'all') print views_embed_view('v_all_especes','block_1');
                else print views_embed_view('v_all_especes','block_all_especes', $nidBalade);
    						?>

    					</div>
    				</div>			
    		  </section>
    	  </div>
  </div><!-- fin container-node -->
</div><!-- fin container -->

<script type="text/javascript">
   $( document ).ready(function() {

        //Gallerie
        $('.view-display-id-block_slideshow .view-content').justifiedGallery({
          rowHeight : 150,
          maxRowHeight : 200,
          margins : 2,
          lastRow : 'justify',
        });


        //Filtre par balade
        $('select#selectBalade').change(function(){

          var selectBaladeIsChange = false;
          var choixBalade = this.value;
          choixBalade = choixBalade.split('/');
          choixBalade = choixBalade[1];

          //Recuperation de la balade en cours dans l'url
          var pathname = window.location.href;
          pathname = pathname.split('?balade=');
          var currentBalade = pathname[1];

          if(pathname.length == 1) currentBalade = 'all';

          //Si la balade courante est différente que celle selectionnée dans le 'select' alors => changement
          if((currentBalade != choixBalade && currentBalade == 'all') || currentBalade != choixBalade) selectBaladeIsChange = true; 
          else selectBaladeIsChange = false;

          //Si on a selectionné une autre balade
          if(selectBaladeIsChange){

            var base_url = "<?php Print($base_url); ?>";

            //Alors lors du clic sur "rechercher", faire une redirecion
            $('#edit-submit-v-all-especes').click(function(e){              
              
              //redirect
              if(choixBalade == 'all') window.location.href = base_url+"/especes";
              else window.location.href = base_url+"/especes?balade="+choixBalade;

              });

              }else $('#edit-submit-v-all-especes').unbind();
            });


  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
  }
  
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
  }

  $('span.closeBtn').click(function(event) {
    
    /* Act on the event */
    setCookie('cookieIsClosed','true', 1);
    $('div.usageCookie, span.closeBtn, div.fakeDivheightUsageCookie').animate({
      height: "0px",
      padding : "0"
    }, function(){
      $(this).css('display','none');
    });
  
  });  
  
  if(getCookie('cookieIsClosed') == 'false' || getCookie('cookieIsClosed') == ''){

    $('div.usageCookie, div.fakeDivheightUsageCookie').animate({
      height: "auto",
      padding : "5px 0%"      
    }, function(){
      $(this).css('display','block');      
    });

  } 
  


            

     });
  </script>
  		<?php print render($page['footer']); ?>