Mises à jour
============

Contexte
--------

Gestion des mise à jour pour les éléments non-versionnés :
- base de données
- configuration via l'admin
- modules et libraries tiers
- etc


Publier une mise à jour
-----------------------

A chaque fois qu'il y a des modifications à faire à la main, on créé
un fichier dans ce répertoire. On y décrit les modifications
à faire et on committe ce fichier avec le reste.

Les noms de fichier sont à créer avec le format suivant :

   aaaa-mm-jj-titre.txt


Appliquer une mise à jour
-------------------------

Après un `git pull`, s'il y a des nouveaux fichiers qui apparaissent
dans le répertoire des `updates/`, on les ouvre, on les lit, on les
comprends et on fait les modifs décrites.

Quand on a fini, on écrit dans le fichier `updates/derniere_modif` le nom du
dernier fichier traité.


Règles
------

- Avant chaque instruction, utilisez la chaine de caractère suivante ":>"
- Pensez à copier les exports des vues/règles/autres afin qu'ils soient versionnées entre ces caractères : {## ... ##}

PS : Ne pas hésiter à détailler le plus possibles les actions à réaliser.

Exemple : 	

		##PAGE D'ACCUEIL
		################
		:> Maj vue "v_atlas_presentation" {{ ##
			
		...

		## }}

		:> Donner/changer un titre aux contenus "sous-bassins", voir site de dev. Au passage, mettre au statut "Brouillon" si pas fait.
		:> Maj label, sur l'url : "admin/content/node-type/book-cluster/fields/field_cluster_biblio", cliquer sur modifier les informations de base
		:> Etiquette -> "Principales ressources bibliographiques ( 10 références maximum )"



