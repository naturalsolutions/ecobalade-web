<script src="https://www.google.com/recaptcha/api.js?hl=fr" async="async" defer="defer"></script>
<div class="container-fluid containerNoMargin">

  <!-- Début fold 1 -->
  <div class="profold1">
    <div class="row-fluid marginRowHeader">

        <div class="span4 marginBtnRetour">
          <a class="btnRetourSite" href="http://www.ecobalade.fr/" target="blank">RETOUR AU SITE</a>
        </div>
        
        <div class="span8">
            <div class="navbar ">
              <div class="navbar-inner navProStyle">
                <div class="container">
             
                      <!-- .btn-navbar affiche le burger -->
                   <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                   </a>
                           
                 
                      <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
                        <ul class="nav">
                          <li class="active"><a class="navProActive" href="#">ACCUEIL</a></li>
                          <li><a href="#app">APPLICATION</a></li>
                          <li><a href="#web">SITE WEB</a></li>
                          <li><a href="#livret">LIVRETS PAPIER</a></li>
                          <li><a href="#presence">PR&Eacute;SENCE NATIONAL</a></li>
                          <li><a href="#formules">FORMULES</a></li>
                          <li><a href="#temoignages">T&Eacute;MOIGNAGES</a></li>
                          <li><a href="#devis">DEVIS</a></li>
                        </ul>
                    </div>
             
                </div>
              </div>
          </div>
        </div>

    </div>

    <div class="container">

        <div class="row-fluid rowLogoFold1">
            <?php //simulation de  drupal_set_message
            if( isset($_POST['name']) && isset($_POST['email']) ){ 
                
                echo '
                  <div class="alert alert-block alert-status">
                    <a class="close" data-dismiss="alert" href="#">x</a>
                    <h4 class="alert-heading">Email envoyé</h4>
                    Merci pour l\'intérêt que vous portez à notre projet, nous vous répondrons au plus vite.
                  </div>
                ';

            }
            ?>
            <div class="span12 logo">
            </div>
        </div>

        <div class="row-fluid rowScrollFold1">
            <div class="span12 scrollDown">
                <p href="#" class="txtScroll">DÉFILER VERS LE BAS</p>
                <p>&darr;</p>
            </div>
        </div>

    </div>
  </div>
  <!-- Fin fold 1 -->

  <!-- Début fold 2 apport pour le client -->
    
    <div class="row-fluid borderBottomFold2" id="">
        <div class="span4 imgApportClient">
        </div>

        <div class="span8 styleTxtFold2">
            <div class="row-fluid rowHaut">

                <div class="span6 alignBlocHaut bloc-un">
                  <div class="iconDecouvrir bgIcon"></div>
                  <h3>D&Eacute;COUVRIR LA FAUNE &amp; LA FLORE</h3>
                  <p>Ecobalade est une <strong>application mobile</strong> qui offre une <strong>découverte</strong> de la faune et de la flore, lors de balades ou de randonnées.</p>
                </div>

                <div class="span6 bloc-deux">
                  <div class="iconActivite bgIcon"></div>
                  <h3>NOUVELLE ACTIVIT&Eacute; DE PLEINE NATURE</h3>
                  <p>Téléchargeable gratuitement et utilisable off line, <strong>Ecobalade transforme les balades</strong> en nouvelle activité de pleine nature,  où <bstrong>la biodiversité et le patrimoine<strong/> sont à la portée de tous.</p>
                </div>

            </div>

            <div class="row-fluid rowBas">

                <div class="span6 alignBlocBas bloc-trois">
                  <div class="iconValoriser bgIcon"></div>
                  <h3>VALORISER LE TERRITOIRE</h3>
                  <p>Ecobalade a pour objectif <strong>la promotion</strong> et <strong>la valorisation des territoires</strong>, via la découverte de leur biodiversité et de leur nature.</p>
                </div>

              
                <div class="span6 bloc-quatres">
                  <div class="iconSensibiliser bgIcon"></div>
                  <h3>SENSIBILISER</h3>
                  <p>A destination des familles, des scolaires, Ecobalade est <strong>un outil pédagogique</strong>. Elle permet d’aborder les thématiques de <strong>la biodiversité</strong>, de la protection de l’environnement, de <strong>l’éco-citoyenneté</strong>…</p>
                </div>

            </div>

        </div>
    </div>

<!-- Fin fold 2 -->

<!-- Début fold 3 l'application -->
  <div class="container" id="app">
    <div class="row-fluid">
        <div class="span6 txtFold3">
            <h2>L' APPLICATION</h2>
            <p>
            Téléchargeable gratuitement sur Play Store (Androïd) et Apple Store, l’application Ecobalade permet de sélectionner et d’enregistrer une ou plusieurs balades sur son smartphone, en prévision des parcours qu’on souhaite effectuer. Une fois téléchargées, elles sont alors consultables en autonomie totale, même <strong>sans connexion internet</strong>.
            <br/>
            <br/>
            L’application propose, pour chaque balade, une liste d’espèces potentiellement visibles (oiseaux, plantes…) dans son environnement immédiat. Chaque espèce est illustrée de photos et d’une infographie permettant d’enrichir et d’approfondir ses connaissances. Une clé de détermination facilite quant à elle <strong>la reconnaissance des espèces</strong> végétales. Arbres ou fleurs observés, sont ainsi facilement identifiables en quelques clics. Les observations recueillies lors des balades peuvent enfin être enregistrées dans un carnet de terrain, afin d’être consultées ultérieurement.
            </p>
            <div class="row-fluid">
                <div class="span12 placeBtnFold3">
                    <a class="btnAppStore" href="https://itunes.apple.com/fr/app/ecobalade/id674569147" target="blank">App Store</a>
                    <a class="btnGooglePlay" href="https://play.google.com/store/apps/details?id=com.ns.ecoBalade" target="blank">Google Play</a>
                </div>
            </div>
        </div>

        <div class="span6 iphoneImg">
        </div>
    </div>
  </div> <!-- Fin fold 3 -->

<!-- Début fold 4 le site web -->

	<div class="row-fluid bgVert" id="web">
		<div class="span7 imgFold4">
		</div>
		<div class="span5 txtFold4">
			<h2>LE SITE WEB</h2>
            <p>
            <a href="http://www.ecobalade.fr/" alt='vers le site ecobalade' title='vers le site ecobalade'>www.ecobalade.fr</a> est le principal point d’entrée pour la découverte du service Ecobalade. Sur le site, le visiteur peut sélectionner et préparer une balade en effectuant un tri par type de circuit, difficulté, distance à parcourir ou <strong>localisation géographique</strong>. Il a également accès à toutes les randonnées et balades, mais aussi à l’ensemble des <strong>fiches espèces</strong> (plus de 1500). Les utilisateurs peuvent aussi poster des <strong>commentaires</strong> ou des <strong>photos</strong> de leurs balades.
            </p>
			<a class="btnVoirLeSiteFold4" href="http://www.ecobalade.fr/" target="blank">Voir le site web</a>
		</div>
	</div>

<!-- fin fold 4 le site web -->

<!-- Début fold 5 -->
    <div class="row-fluid imgFold5" id="livret"> 
        <div class="container">  <!-- livret papier -->
            <div class="span6 txtFold5"> 
              <h2>LE LIVRET PAPIER</h2>
                    <p>
                    Nous vous proposons l’édition d’un guide papier, dans le prolongement du site internet et de l’application. Il présente <strong>les parcours de promenades et de randonnées</strong> et informe sur les <strong>espèces emblématiques</strong> susceptibles d’être rencontrées lors de la balade, grâce à des fiches très complètes. Un système de <strong>QR codes</strong> renvoie vers le site internet <a href="http://www.ecobalade.fr/" alt='vers le site ecobalade' title='vers le site ecobalade'>www.ecobalade.fr</a> pour obtenir des informations complémentaires et aller plus loin, avant, pendant ou après la balade.
                    </p>
              <a class="btnVoirLivret" href="sites/all/themes/ecobaladeTwitter/img/livrets/Guide_CapSizun_web.pdf" target="blank">Voir plus</a>
            </div>
            <div class="span6 imgLivretFold5">
            </div>
        </div>

        <div class="row-fluid zoneStat">  <!-- statistiques -->
            <div class="container">
                <div class="span3 oneStat">
                    <div class="bgIcon iconEmerveillement"></div>
                    <h4>400</h4>
                    <p>KM &Eacute;MERVEILLEMENT</p>
                </div>
                <div class="span3 oneStat">
                    <div class="bgIcon iconConnexion"></div>
                    <h4>150.000</h4>
                    <p>CONNEXION / AN</p>
                </div>
                <div class="span3 oneStat">
                    <div class="bgIcon iconTelechargement"></div>
                    <h4>30.000+</h4>
                    <p>T&Eacute;L&Eacute;CHARGEMENT</p>        
                </div>
                <div class="span3 oneStat">
                    <div class="bgIcon iconLike"></div>
                    <h4>5.000+</h4>
                    <p>LIKE FACEBOOK</p>      
                </div>
            </div>
        </div>

    </div><!-- fin fold 5 le livret papier et stat-->

<!-- Début fold 6 presence national -->
    <div class="row-fluid borderBottomFold2" id="presence">
        <div class="span6 imgCarteFold6"></div>
        <div class="span6 txtFold6">
            <h2>PR&Eacute;SENCE NATIONALE</h2>
                      <p>
                      <strong>Solution innovante</strong>, Ecobalade s’adresse aux gestionnaires d’espaces naturels, aux responsables de collectivités territoriales, aux offices de tourisme... désireux de promouvoir <strong>l’écotourisme</strong> sur leur territoire.
                      <br/>
                      <br/>
                      Elle constitue un outil de communication performant, dans le cadre d’une stratégie de <strong>marketing territorial</strong>, et un moyen de promouvoir efficacement les actions entreprises dans le domaine du <strong>développement durable</strong>, de la protection de la biodiversité…
                      <br/>
                      <br/>
                      En proposant aux visiteurs une <strong>découverte instantanée de la nature</strong> via des parcours de randonnées « enrichies » et réalisés sur mesure par des naturalistes, Ecobalade contribue à la <strong>mise en valeur du patrimoine des territoires</strong>. Elle renforce aussi leur attractivité auprès d’une clientèle à la recherche de destinations <strong>« écotouristique »</strong>.  
                      <br/>
                      <br/>
                      L’application fonctionne comme un <strong>sentier d’interprétation numérique et interactif</strong>, utilisable en complément de vos panneaux d’information existants.
                      <br/>
                      <br/>
                      Complémentaire de l’application, le site <a href="http://www.ecobalade.fr/" alt='vers le site ecobalade' title='vers le site ecobalade'>www.ecobalade.fr</a> apporte une visibilité supplémentaire (150 000 visiteurs / an) au territoire et la possibilité de promouvoir des offres de séjours (hébergement, restauration, activités nature…), dans une optique de <strong>développement économique</strong>.
                      </p>
            <a class="btnVoirLivret" href="http://www.natural-solutions.eu/contacts/" target="blank">Contact</a>
        </div>
    </div> <!-- Fin fold 6 presence national -->

<!-- début fold 7 les formules-->    
    <div class="container" id="formules">
        <div class="row txtTitleFold7">
            <div class="span12">
                <h2>NOS FORMULES</h2>
                <!-- <p>In at metus quis nunc varius pulvinar id a nunc. Maecenas at egestas ex. Donec id nisl tempor, dapibus. Phasellus mattis in eros sit amet volutpat. Proin sit amet tincidunt nunc. Cras laoreet  massa vitae nibh tempor, a tincidunt enim tristique. Aliquam interdum vitae felis fermentum tempor.</p>  -->
            </div>
        </div>

        <div class="row zindexHaut espaceRowFormule"> <!-- formule basic -->
             <div class="span4 img1BasicFormule" id="formuleBasicItem"></div>
             <div class="span8 otherOne">
                <div class="basicTitleFormule">
                    <h3>BASIC</h3>
                    <p>FORMULE</p>
                </div>
                <div class="detailFormuleBasic">
                    <ul>
                        <li>- La <span class="txtFormuleBold">définition</span> de la balade, du parcours, du nombre d’espèces</li>
                        <li>- L’intégration des <span class="txtFormuleBold">données</span> dans le service ecobalade</li>
                        <li>- Le développement informatique sur le site web <span class="txtFormuleBold">ecobalade.fr</span> et sur <span class="txtFormuleBold">l’application</span></li>
                        <li>- La <span class="txtFormuleBold">mise en ligne</span> de la balade</li>
                        <li>- La présence de <span class="txtFormuleBold">votre logo</span></li>
                        <li>- Soutient en <span class="txtFormuleBold">communication auprès des médias</span> (radios, TV, presse) et sur les <span class="txtFormuleBold">réseaux sociaux</span></li>
                        <li>- Envoi d’un <span class="txtFormuleBold">fichier d’impression</span> d’affiches et de flyers</li>
                    </ul>
                    <a class="btnDevisFormule" href="#devis">Demander un devis</a>
                </div>
            </div> 
       </div>

       <div class="row">
              <div class="span7 img2BasicFormule"></div>
       </div>

       <!-- formule standart -->
       
       <div class="row zindexHaut espaceRowFormule" id="formuleStandartItem">
            <div class="span8 img1StandartFormule"></div>
             <div class="span4 otherTwo">
                <div class="standartTitleFormule">
                    <h3>STANDART</h3>
                    <p>FORMULE</p>
                </div>
                <div class="detailFormuleBasic"> <!-- même class que la liste de la formule basic -->
                    <ul>
                        <li><a href="#formuleBasicItem"><span class="txtFormuleBold">- LA FORMULE BASIC +</span></a></li>
                        <li>- Le <span class="txtFormuleBold">relevé naturaliste</span> pour la création d'une ecobalade</li>
                        <li>- <span class="txtFormuleBold">Prise de photos</span> de la balade</li>
                    </ul>
                    <a class="btnDevisFormule" href="#devis">Demander un devis</a>
                </div>
            </div> 
       </div>

    </div> <!-- fin container fold 7 formule basic et debut formule standart -->

    <div class="row-fluid">
          <div class="span7 img2StandartFormule"></div>
    </div>
        
    <!-- fin formule standart -->

    <div class="row-fluid preniumRowFluid">
       <div class="span7 img1PreniumFormule"></div>
       <div class="span5 positionTxtFormulePrenium">
           <div class="preniumTitleFormule">
                  <h3>PRENIUM</h3>
                  <p class="txtFormuleBold">FORMULE</p>
            </div>
            <div class="detailFormuleBasic positionPreniumFormuleDetail"> <!-- même class que la liste de la formule basic -->
                <ul>
                    <li><a href="#formuleStandartItem"><span class="txtFormuleBold">- LA FORMULE STANDART + le Livret papier</span></a></li>
                    <li>- La création des <span class="txtFormuleBold">illustrations</span> du livret</li>
                    <li>- La création du <span class="txtFormuleBold">contenu des fiches</span> du livret</li>
                    <li>- La création <span class="txtFormuleBold">graphique</span> du livret</li>
                    <li>- La mise à disposition d'un <span class="txtFormuleBold">fichier numérique</span> pour l'impression du livret par le client</li>
                </ul>
                <a class="btnDevisFormule" href="#devis">Demander un devis</a>
            </div>
       </div>
     </div> 

    <div class="row-fluid">
          <div class="span12 img2PreniumFormule"></div>
    </div>

    <!-- fin formule prenium -->
<!--     début recapitulatif des formule
     -->    
    <div class="container">
        <div class="span12 separateurProRecapitulatif"></div>
    </div>

     <div class="container">
        <div class="row txtTitleFold7">
            <div class="span12">
                <h2>R&Eacute;CAPITULATIF</h2>
                <!-- <p>In at metus quis nunc varius pulvinar id a nunc. Maecenas at egestas ex. Donec id nisl tempor, dapibus. Phasellus mattis in eros sit amet volutpat. Proin sit amet tincidunt nunc. Cras laoreet  massa vitae nibh tempor, a tincidunt enim tristique. Aliquam interdum vitae felis fermentum tempor.</p>  -->
            </div>
        </div>
    
        <div class="row-fluid">
          <div class="span4 borderRecapFormule paddindFormuleBasicRecap">
              <div class="titleRecapFormule">
                  <p>FORMULE</p>
                  <h3>BASIC</h3>
                  <div class="detailFormuleBasic">
                      <ul>
                          <li>La <span class="txtFormuleBold">définition</span> de la balade, du parcours, du nombre d’espèces</li>
                          <li>L’intégration des <span class="txtFormuleBold">données</span> dans le service ecobalade</li>
                          <li>Le développement informatique sur le site web <span class="txtFormuleBold">ecobalade.fr</span> et sur <span class="txtFormuleBold">l’application</span></li>
                          <li>La <span class="txtFormuleBold">mise en ligne</span> de la balade</li>
                          <li>La présence de <span class="txtFormuleBold">votre logo</span></li>
                          <li>Soutient en <span class="txtFormuleBold">communication auprès des médias</span> (radios, TV, presse) et sur les <span class="txtFormuleBold">réseaux sociaux</span></li>
                          <li>Envoi d’un <span class="txtFormuleBold">fichier d’impression</span> d’affiches et de flyers</li>
                      </ul>
                      <!-- <a class="btnDevisFormule" href="#">Demander un devis</a> -->
                  </div>
              </div>
          </div>

          <div class="span4 borderRecapFormuleStandart">
              <div class="titleRecapFormule">
                  <p>FORMULE</p>
                  <h3>STANDART</h3>
                 <div class="detailFormuleBasic">
                      <ul>
                          <li>La <span class="txtFormuleBold">définition</span> de la balade, du parcours, du nombre d’espèces</li>
                          <li>L’intégration des <span class="txtFormuleBold">données</span> dans le service ecobalade</li>
                          <li>Le développement informatique sur le site web <span class="txtFormuleBold">ecobalade.fr</span> et sur <span class="txtFormuleBold">l’application</span></li>
                          <li>La <span class="txtFormuleBold">mise en ligne</span> de la balade</li>
                          <li>La présence de <span class="txtFormuleBold">votre logo</span></li>
                          <li>Soutient en <span class="txtFormuleBold">communication auprès des médias</span> (radios, TV, presse) et sur les <span class="txtFormuleBold">réseaux sociaux</span></li>
                          <li>Envoi d’un <span class="txtFormuleBold">fichier d’impression</span> d’affiches et de flyers</li>
                          <li>Le <span class="txtFormuleBold">relevé naturaliste</span> pour la création d'une ecobalade</li>
                          <li><span class="txtFormuleBold">Prise de photos</span> de la balade</li>
                      </ul>
                      <!-- <a class="btnDevisFormule" href="#">Demander un devis</a> -->
                  </div>
              </div>
          </div>

          <div class="span4 borderRecapFormule paddindFormulePreniumRecap">
              <div class="titleRecapFormule">
                  <p>FORMULE</p>
                  <h3>PRENIUM</h3>
                  <div class="detailFormuleBasic">
                      <ul>
                          <li>La <span class="txtFormuleBold">définition</span> de la balade, du parcours, du nombre d’espèces</li>
                          <li>L’intégration des <span class="txtFormuleBold">données</span> dans le service ecobalade</li>
                          <li>Le développement informatique sur le site web <span class="txtFormuleBold">ecobalade.fr</span> et sur <span class="txtFormuleBold">l’application</span></li>
                          <li>La <span class="txtFormuleBold">mise en ligne</span> de la balade</li>
                          <li>La présence de <span class="txtFormuleBold">votre logo</span></li>
                          <li>Soutient en <span class="txtFormuleBold">communication auprès des médias</span> (radios, TV, presse) et sur les <span class="txtFormuleBold">réseaux sociaux</span></li>
                          <li>Envoi d’un <span class="txtFormuleBold">fichier d’impression</span> d’affiches et de flyers</li>
                          <li>Le <span class="txtFormuleBold">relevé naturaliste</span> pour la création d'une ecobalade</li>
                          <li><span class="txtFormuleBold">Prise de photos</span> de la balade</li>
                          <li>La création des <span class="txtFormuleBold">illustration</span> du livret</li>
                          <li>La création du <span class="txtFormuleBold">contenu des fiches</span> du livret</li>
                          <li>La création <span class="txtFormuleBold">graphique</span> du livret</li>
                          <li>La mise à disposition d'un <span class="txtFormuleBold">fichier numérique</span> pour l'impression du livret par le client</li>
                      </ul>
                      <!-- <a class="btnDevisFormule" href="#">Demander un devis</a> -->
                  </div>
              </div>
          </div>
      </div> <!-- fin row qui contient les 3 tableau recap des formule-->

        <div class="row">
            <div class="span8 divAppDedie">
                 <h4>APPLICATION D&Eacute;DI&Eacute;E</h4>
                 <h3>SUR MESURE</h3>
                 <p>
                 APPLICATION SPÉCIALEMENT CONSTRUITE POUR VOUS ET PERSONNALISÉE (SELON VOTRE CAHIER DES CHARGES, AVEC ATELIERS CRÉATIFS DE CO-CONCEPTION)
                 </p>
            </div>
        </div>

        <div class="row placementBtnRecap">
            <div class="span12">
                  <a class="btnDevisRecap" href="#devis">Demander un devis</a>
            </div>
        </div> 
  </div> <!-- fin row ensemble de recapitulatif-->

<!-- témoignages -->

  <div class="row-fluid" id="temoignages">
    <div class="span12 imgTemoignage">

      <div class="oneTemoignage">
        <p>
          <b>Communauté d'agglomération du Pays d'Aix</b>
          <i>"Je voulais vous féliciter car votre travail correspond parfaitement à notre demande !"</i> 
        </p>        
      </div>

      <div class="oneTemoignage">
        <p>
          <b>Communauté Concarneau Agglomération</b>
          <i>"Nous sommes totalement satisfaits du travail réalisé et personnellement j'ai apprécié notre collaboration."</i>
        </p>        
      </div>

      <div class="oneTemoignage">
        <p>
          <b>Réserve naturelle nationale du cap Sizun - Bretagne Vivante</b>
          <i>"Un concept innovant vraiment au service de la découverte de la nature! Une bonne paire de chaussure, l'appli EcoBalade, et c'est parti!"</i>
        </p>        
      </div>

      <div class="oneTemoignage">
        <p>
          <b>Département du Nord</b>
          <i>"Le Département du Nord et le Comité de Randonnée pédestre sont fiers de proposer aux nordistes de nouveaux moyens de découverte innovants et ludiques."</i>
        </p>        
      </div>      
      
    </div>
  </div>

<!-- formulaire de contact
 -->

    <div class="container" id="devis">
          



        <div class="row txtTitleFold7">
            <div class="span12">
                <h2>DEMANDE DE DEVIS</h2>
                <p>In at metus quis nunc varius pulvinar id a nunc. Maecenas at egestas ex. Donec id nisl tempor, dapibus. Phasellus mattis in eros sit amet volutpat. Proin sit amet tincidunt nunc. Cras laoreet  massa vitae nibh tempor, a tincidunt enim tristique. Aliquam interdum vitae felis fermentum tempor.</p> 
            </div>
        </div>


        <div class="row">
           <div class="span12 formContactPro">
                <form method="POST" action="pro" class='formContact'>
                                            
                      <div class="row">                        
                        <div class="span4 offset2">
                        
                          <div class="input-group">
                            <input type="text" class="form-control name" name="name" placeholder="Nom *">                            
                          </div>

                        </div>
                        <div class="span4">
                        
                          <div class="input-group">
                            <input type="text" class="form-control" name="firstname" placeholder="Prénom">
                          </div>

                        </div>
                      </div>
        
                      <div class="row">
                          <div class="span8 offset2">
                            <input type="text" class="large" name="country" placeholder="Territoire"/>                            
                          </div>                        
                      </div>

                      <div class="row">                        
                        <div class="span4 offset2">
                        
                          <div class="input-group">
                            <input type="text" class="form-control email" name="email" placeholder="Email *">                            
                          </div>

                        </div>
                        <div class="span4">
                        
                          <div class="input-group">
                            <input type="text" class="form-control" name="phone" placeholder="Téléphone">
                          </div>

                        </div>
                      </div>
                      
                      <div class="row">
                          <div class="span12">                            
                            <textarea name="comment" placeholder="Votre message..."></textarea>
                          </div>                        
                      </div>                      
                      
                
            </div>
          
            <div class="row">
              <div class="span12 formButtonRadio">
                <p class="titleBtnRadioFormContact">Vous êtes :</p>
                
                <div class="blocRadioButtons">
                    <input type="radio" name="whoIs" value="Office de tourisme" id="unOT" /> <label for="unOT"> Un office de tourisme</label></br>
                    <input type="radio" name="whoIs" value="Collectivité territoriale" id="unCT" /> <label for="unCT"> Une collectivité territoriale</label></br>
                    <input type="radio" name="whoIs" value="Particulier" id="unPA"/> <label for="unPA"> Un particulier</label></br>
                </div>

                <div class="buttonRow">
                  <input  type="submit" value="Demander un devis gratuit" class="btnDevisRecap" />                
                </div>

                <div id='recaptcha' data-sitekey='6LdH9wsTAAAAAMQj9bKngiwwbIwU9WpdCD2WC1X_' class="g-recaptcha"></div>


              </div>
            </div>
          </form>

    </div> <!-- fin container form de contact -->



<?php 
if( isset($_POST['name']) && isset($_POST['email']) ){  

  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $comment = $_POST['comment'];
  $whoIs = $_POST['whoIs'];
  
  $params = array(
    'subject' => '[#ecobalade] Demande de devis - Formulaire page Pro',
    'body' =>"<p> Nom : ".$name." <p/>
              <p> Prénom : ".$firstname."  <p/> 
              <p> Fonction : ".$whoIs." <p/> 
              <p> Territoire : ".$country." <p/>
              <p> Email : ".$email." <p/>
              <p> Téléphone : ".$phone." <p/>
              <p> Message : ".$comment."<p/>" 
  );

  // Send out the e-mail.
  drupal_mail('NsHook', 'NsHook_mail_page_pro', "p.delaunay1@gmail.com", language_default(), $params);  

}

?> 
</div> <!-- fin container-fluid.pro -->

<script>
jQuery( document ).ready(function() {

  var checkForm = function(){

    $('form.formContact').submit(function(event) {
      /* Act on the event */
      var form = $(this);
      event.preventDefault();

      var name = form.find("input.name").val();
      var email = form.find("input.email").val();

      if(name == '') alert('Veuillez inscrire votre nom pour soumettre le formulaire');
      else if(email == '') alert('Veuillez inscrire votre email pour soumettre le formulaire');
      else if(name != '' && email != '') {
      

        var v = grecaptcha.getResponse();

        if(v.length != 0) {

          form[0].submit();

        }else{
          alert("Veuillez répondre aux question Google pour vérifier que vous n'êtes pas un robot.");
        }
      }


    });
    
  };

  window.init = function() {
    checkForm();
  }

  init(); // true 

});
</script>
<?php print render($page['footer']); ?>

