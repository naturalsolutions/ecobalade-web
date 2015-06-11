<?php
/***************************************************************************/
/***************************************************************************/
/*                          TEMPLATE DU FOOTER                             */
/*                                                                         */
/***************************************************************************/
/*********************************  ****************************************/
/*********************************  ****************************************/
global $base_url;
?>

<footer class="footer container-fluid">

	<div class='container'>
			
		
		<!-- les trois colones -->
		<div class="row-fluid">


			<div id="store" class="span4">
			
				<a class="icon_android_store" rel="external" title="Télécharger l'application ecoBalade sur GooglePlay" href="https://play.google.com/store/apps/details?id=com.ns.ecoBalade&hl=fr_FR">Disponible sur Google Play</a>
				<a class="icon_apple_store" rel="external" title="Télécharger l'application ecoBalade sur l'appleStore" href="https://itunes.apple.com/fr/app/ecobalade/id674569147?mt=8">Disponible sur Apple Store</a>
			
			</div>



			<div id="questions" class="span4">
				<h4 class="footer-title">Des questions ?</h4>
				
				<a href="<?php echo $base_url; ?>/contact" title="">Vous êtes un ecoBaladeur ?</a>
				<a href="<?php echo $base_url; ?>/contact#enseignant" title="">Vous êtes un enseignant ?</a>
				<a href="<?php echo $base_url; ?>/contact#office" title="">Vous êtes  un office de tourisme ?</a>
				<a href="<?php echo $base_url; ?>/contact#office" title="">Vous êtes une collectivité territoriale ?</a>
				<br/>
				<a href="<?php echo $base_url; ?>/partenaires" title="Présentation des partenaires du service ecoBalade">Nos partenaires</a>
				<a href="<?php echo $base_url; ?>/on-en-parle" title="Vers la page &quot;On en parle&quot;, presse">On en parle</a>
			
			</div>


			<div id="contact" class="span4">
				
				
				<div class="row-fluid">
					
					<div class="span12">
					<h4>Contact</h4>						
					</div>
					
					<div class="row-fluid">
						
						<div class="span2">
							<a class='linkMap' href='https://www.google.fr/maps/place/Natural+Solutions/@43.291723,5.372112,15z/data=!4m6!1m3!3m2!1s0x0:0x80426ab77b7d342d!2sNatural+Solutions!3m1!1s0x0:0x80426ab77b7d342d' title='Vers la carte' alt='Vers la carte'></a>
						</div>

						<div class="span10">
							<p>68 rue Sainte, 13001 Marseille<br/>00 33(0)4 91 33 53 87<br/><a href="http://www.natural-solutions.eu/contacts/">contact@natural-solutions.eu</a></p>						
						</div>

					</div>

				</div>

			
			</div>


		</div>
	
	</div> <!-- fin container -->
	
	<div class="container">
		
		<!-- la bar social -->
		<div class="row-fluid">

			<div id="social" class="span12">

					<h4>Rejoignez-nous sur</h4>					
					<a href="https://www.facebook.com/EcoBalade" title="Suivez-nous sur Facebook" id="lien_facebook"  rel="external"></a>
					<a href="https://twitter.com/ecobalade" title="Suivez-nous sur Twitter" id="lien_twitter"  rel="external"></a>
					<a href="https://plus.google.com/106878953750776121381/posts" title="Suivez-nous sur Google+" id="lien_google"  rel="external"></a>
					<a href="http://m.pinterest.com/Ecobalade" title="Suivez-nous sur Pinterest" id="lien_pinterest" rel="external"></a>					
					<a href="http://instagram.com/ecobalade#" title="Suivez-nous sur Instagram" id="lien_instagram"  rel="external"></a>
					<a href="mailto:contact@natural-solutions.eu" title="Ecrivez-nous" id="lien_mail"  rel="external"></a>

			</div>

		</div>


		<div class="row-fluid">
							
			<div id="copyright" class="span12">
				<a href="http://www.natural-solutions.eu">© Natural Solutions</a>
			</div>
			
		</div>



		<div id="elevator">

			<div class="elevator-button" title='Revenir en haut de la page'>
				<svg class="sweet-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" height="50px" width="50px">
					<path d="M70,47.5H30c-1.4,0-2.5,1.1-2.5,2.5v40c0,1.4,1.1,2.5,2.5,2.5h40c1.4,0,2.5-1.1,2.5-2.5V50C72.5,48.6,71.4,47.5,70,47.5z   M47.5,87.5h-5v-25h5V87.5z M57.5,87.5h-5v-25h5V87.5z M67.5,87.5h-5V60c0-1.4-1.1-2.5-2.5-2.5H40c-1.4,0-2.5,1.1-2.5,2.5v27.5h-5  v-35h35V87.5z"></path>
					<path d="M50,42.5c1.4,0,2.5-1.1,2.5-2.5V16l5.7,5.7c0.5,0.5,1.1,0.7,1.8,0.7s1.3-0.2,1.8-0.7c1-1,1-2.6,0-3.5l-10-10  c-1-1-2.6-1-3.5,0l-10,10c-1,1-1,2.6,0,3.5c1,1,2.6,1,3.5,0l5.7-5.7v24C47.5,41.4,48.6,42.5,50,42.5z"></path>
				</svg>					
			</div>
		
		</div>

	</div>	<!-- fin container -->

	
</footer>

<script>
jQuery( document ).ready(function() {


	//Pour envoyer en haut de la page
	var scroll2Top = function(){


		var elevator = new Elevator({
			element: document.querySelector('.elevator-button'),
			duration: 1000 // milliseconds
		});
		
		
		$('.elevator-button > svg').click(function () {

			elevator.elevate();

		});

	};

	//Effect lors du scroll vers bas de page
	var effectOnButtonElevator = function(){

		$.fn.scrollBottom = function() { 
		  return $(document).height() - this.scrollTop() - this.height(); 
		};

		$(window).scroll(function (event) {
			
			var scroll = $(window).scrollBottom();
			
			if(scroll == 0){

				var l = 10;  
			   for( var i = 0; i < 10; i++ ) $( "#elevator" ).animate( { 'right': "+=" + ( l = -l ) + 'px' }, 100);  
			}
			
		})

	}

	window.init = function() {
		
		//Pour envoyer en haut de la page
		scroll2Top();

		//Effect lors du scroll vers bas de page
		effectOnButtonElevator();
	}
	
	init(); // true	
})
</script>


