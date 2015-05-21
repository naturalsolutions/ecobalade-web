<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
  <?php global $base_url; ?>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/css/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<!-- <link rel="stylesheet" href="<?php //echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/css/jquery.smartbanner.css" type="text/css" media="screen" /> -->

  <?php print $scripts; ?>

 
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/helpers/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/helpers/jquery.fancybox-thumbs.js"></script>
<!-- <script type="text/javascript" src="<?php //echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/js/jquery.smartbanner.js"></script> -->

 <script type="text/javascript" src="http://www.panoramio.com/wapi/wapi.js?v=1&amp;hl=fr"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!-- UserVoice JavaScript SDK (only needed once on a page) -->
<!-- <script>(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/UQnVCMNzrccwNnCfJoQouw.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})()</script>-->

<!-- Header de DL App pour device mobile -->


<meta name="apple-itunes-app" content="app-id=674569147">
<meta name="google-play-app" content="app-id=com.ns.ecoBalade">

<link rel="apple-touch-icon" href="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/btn-launcher.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/btn-launcher72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $base_url; ?>/sites/all/themes/ecobaladeTwitter/img/btn-launcher114.png" />



<script type="text/javascript">
$(function () { 
/* $.smartbanner({ 

    price: 'GRATUIT',
    author: 'NATURAL SOLUTIONS',
    appStoreLanguage: 'fr',
    scale: 'auto',
    inAppStore: 'Sur App Store', // Text of price for iOS
    inGooglePlay: 'Télécharger sur Google Play', // Text of price for Android
    title:'ecobalade',
    button: 'Voir',
    speedIn: 300, // Show animation speed of the banner
    speedOut: 400, // Close animation speed of the banner
    daysHidden: 0, // Duration to hide the banner after being closed (0 = always show banner)
    daysReminder: 90 // Duration to hide the banner after "VIEW" is clicked *separate from when the close button is clicked* (0 = always show banner)

  })*/
// $.smartbanner({ title: 'kamel', // Remplace le titre par défaut (qui est le tag <title> par défaut) 
		// author: 'sabri', // Remplace l'auteur par défaut(qui est le <meta name="author">) 
		// price: 'Free', // Prix de l'app 
		// inAppStore: 'In the App Store', // Texte à coté du prix (ios) 
		// inGooglePlay: 'In Google Play', // Texte à coté du prix (Android) 
		// icon: null, // URL de l'icone (qui est la balise <link> par défaut) 
		// iconGloss: null, // Force l'effet gloss (true ou false) 
		// button: 'VIEW', // Texte sur le bouton d'installation 
		// speedIn: 300, // Durée de l'animation d'apparition 
		// speedOut: 400, // Durée de l'animation de disparition 
		// daysHidden: 15, // Nombre de jours pendant lesquels la bannière sera cachée //après la fermeture(0 = toujours afficher) 
		// daysReminder: 90, // Nombre de jours pendant lesquels la bannière sera cachée //après le clic sur VIEW(0 = toujours afficher) 
		// force: null // Force l'affichage de la bannière Android ou iOS 
		// })

 });
</script>



<!-- 
 -->
<!-- Google+ - utilisateurs depuis un mobile -->
<script type="text/javascript">
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js?publisherid=106878953750776121381";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- A tab to launch the Classic Widget -->
<script>
UserVoice = window.UserVoice || [];
UserVoice.push(['showTab', 'classic_widget', {
  mode: 'full',
  primary_color: '#537a23',
  link_color: '#007dbf',
  default_mode: 'support',
  forum_id: 197161,
  tab_label: 'Donnez vos idées',
  tab_color: '#537a23',
  tab_position: 'middle-right',
  tab_inverted: false
}]);
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37580907-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!--<script type="text/javascript" src="sites/all/themes/ecobaladeTwitter/js/plax.js"></script>-->
<!-- PLUGIN FOR POPUP -->
<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });
</script>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-535e1fe72d9fa867"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=772953486064288";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <?php print $page_top; ?>
  <?php print $page; ?>
  
  <?php print $page_bottom; ?>
</body>
</html>

