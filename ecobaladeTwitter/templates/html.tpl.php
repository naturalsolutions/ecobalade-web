<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
    
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <!-- Panoramio -->
  <script type="text/javascript" src="http://www.panoramio.com/wapi/wapi.js?v=1&amp;hl=fr"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- PUB -->
  <!-- <meta name="verification" content="cd6b4fd75088374c31c969917b0ee717" /> -->

  <!-- Google+ - utilisateurs depuis un mobile -->
  <script type="text/javascript">
    (function() {
      var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
      po.src = "https://apis.google.com/js/plusone.js?publisherid=106878953750776121381";
      var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>


  <!-- Tracker Google Analitycs -->
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
  
  <!-- TradeDoubler site verification 2794210 -->
</head>



<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  
  <!-- AddThix // Social Plugin 
  <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-535e1fe72d9fa867"></script> -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f11cb3439d368f" async="async"></script>

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

