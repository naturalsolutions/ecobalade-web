<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
    
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <!-- Panoramio -->
  <!-- <script type="text/javascript" src="http://www.panoramio.com/wapi/wapi.js?v=1&amp;hl=fr"></script>  -->
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
  <?php 
  global $base_url;  
  // Desactivate for instance de demo et de dev
  if($base_url == 'http://www.ecobalade.fr'):
  ?>
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
  <?php endif; ?>
  <!-- TradeDoubler site verification 2794210 -->
</head>

<div class="usageCookie">
  <p>En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des services et des offres adaptés à vos centres d’intérêts. <span class='closeBtn'>x</span></p>
</div>

<!-- <div class="fakeDivheightUsageCookie">
  <p>En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des services et des offres adaptés à vos centres d’intérêts. <span class='closeBtn'>x</span></p>
</div> -->


<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  
  <!-- AddThix // Social Plugin 
  <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-535e1fe72d9fa867"></script> -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f11cb3439d368f" async="async"></script>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=772953486064288";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  //Call action cookie specification usage
  jQuery( document ).ready(function() {

        function setCookie(cname, cvalue, exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires="+d.toUTCString();
          document.cookie = cname + "=" + cvalue + "; " + expires;
        } //fin setCookie

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
        } //fin getCookie

        var initCookie = function(){

          var isBarCookie = getCookie('cookieIsClosed'),
              heightCookieBar = 0;
              
          //lors du clic pour supprimer le message des cookies
          $('span.closeBtn').click(function(event) {

            console.log('click to close cookieBar');          

            /* Act on the event */
            setCookie('cookieIsClosed','true', 1);
            $('div.usageCookie, span.closeBtn').animate({
              height: "0px",
              padding : "0"
            }, function(){
                $(this).css('display','none');
            });
              
            
            $('header.navbar-fixed-top').animate({        
              top: heightCookieBar+"px"
            }, function(){});
              
            isBarCookie = true;

            $('body').removeClass('cookieBar');

          }); // fin $('span.closeBtn').click 
          
          //Au lancement de la page, si on a pas de cookie alors on affiche le message
          if(!isBarCookie || isBarCookie == ''){
              
            //Affichage de la bar de cookie
            $('div.usageCookie').animate({
                height: "auto"                
            }, function(){
                $(this).css('display','block');      
                $('body').addClass('cookieBar');
            });

          }
          
          setTimeout(function(){doTheJob();}, 1000);

          var doTheJob = function(){

            var heightCookie = parseInt($('div.usageCookie').height()),
                baseHeightCookieBar = 28,
                baseMarginTop = 100,
                myCurrentMarginValue = $('body:not(.admin-menu) > div.container').css('marginTop'),
                myDiff = baseHeightCookieBar - heightCookie,
                currentwidthScreen = window.innerWidth,
                marginToApply = parseInt(baseMarginTop) - parseInt(myDiff);

                /*
                console.log('myDiff : '+myDiff);
                console.log('heightCookie : '+heightCookie);
                console.log('baseHeightCookieBar : '+baseHeightCookieBar);
                console.log('myCurrentMarginValue : '+myCurrentMarginValue);
                */
                
                if($('body').hasClass('cookieBar')){
                //Cookie bar ON
                /*console.log('Cookie bar ON');*/
                  
                  if(currentwidthScreen > 979){
                    
                    $('header.navbar-fixed-top').animate({        
                        top: heightCookie+12+"px"
                      }, function(){                                                                 
                        
                          $('body:not(.admin-menu) > div.container').css('margin-top', marginToApply+'px');
                          /*console.log('heightCookie -> '+heightCookie+' px && marginToApply -> '+marginToApply);                      */

                      }
                    );
                  
                  }else{

                    $('body:not(.admin-menu) > div.container').css('margin-top', 'auto');

                  }

                }else{
                //Cookie bar OFF
                  /*console.log('Cookie bar OFF');*/
                  if(currentwidthScreen > 979) $('body:not(.admin-menu) > div.container').css('margin-top', '60px');
                  else $('body:not(.admin-menu) > div.container').css('margin-top', 'auto');

                }


                /*console.log('------------------------');*/



          }

          //Lors d'un resize de l'écran
          window.onresize = function (){            
            
              doTheJob();
            
          } // fin onresize
        } // fin initCookie


        if(! $('body').hasClass('admin') ) initCookie(); 

  });

  </script>

  <?php print $page_top; ?>
  <?php print $page; ?>  
  <?php print $page_bottom; ?>

</body>
</html>

