(function ($) {
  Drupal.behaviors.NsHook = {
    attach: function (context, settings) {

    	//Si on est dans l'edition ou l'ajout d'une page balade
    	if($('body.page-node-add-balade').length > 0 || $('body.node-type-balade').length > 0){

	   					
			//Dès qu'il y a une requette ajax sur l'edition de balades  
		    $('.node-form.node-balade-form').ajaxComplete(function(event, xhr, settings) {
			    
			    
			    //Photo résumé
			    $('#edit-field-photo-resume').find('.form-type-textfield').each(function(index){

			    	if(index == 0) $(this).find('.description').html("Cette description est à destination des malvoyants et moteurs de recherches. <br/> Si possible ré-utiliser le <i>titre de la balade</i> ainsi que les mots clefs : <i>nature, balade, rando, radonnées, faune, flore</i>");
			    	if(index == 1) $(this).find('.description').html("Si des crédits sont associés à la photo, veuillez l'ajouter entre parenthèses. <br/> Pas de majuscule ou accent <br/> Préferer le séparateur '-' entre les expressions <br/> Si possible ré-utiliser le <i>titre de la balade</i> ainsi que les mots clefs : <i>nature, balade, rando, radonnées, faune, flore</i>");

			    });

			    //Photos 
			    $('#edit-field-image table.sticky-table tr').each(function(index){

		    		$(this).find('.form-type-textfield').each(function(i){
		    		
		    			if(i == 0) $(this).find('.description').html("Cette description est à destination des malvoyants et moteurs de recherches. <br/> Si possible ré-utiliser le <i>titre de la balade</i> ainsi que les mots clefs : <i>nature, balade, rando, radonnées, faune, flore</i>");
		    			if(i == 1) $(this).find('.description').html("Si des crédits sont associés à la photo, veuillez l'ajouter entre parenthèses. <br/> Pas de majuscule ou accent <br/> Préferer le séparateur '-' entre les expressions <br/> Si possible ré-utiliser le <i>titre de la balade</i> ainsi que les mots clefs : <i>nature, balade, rando, radonnées, faune, flore</i>");
		    		
		    		});	    		

			    });
			 
			 
		    });

		}


    } //Fin attach
  };


})(jQuery);