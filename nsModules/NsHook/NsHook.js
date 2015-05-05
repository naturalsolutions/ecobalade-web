(function ($) {
  Drupal.behaviors.NsHook = {
    attach: function (context, settings) {
      

	    //All multiple upload images
	   //  $('.field-type-image table.sticky-enabled tr', context).change(function () {
	        
	   //    	var tr = $(this);

	   //    	tr.find('.form-type-textfield').each(function(index){

	      		
	   //    		console.log( $(this).find('.description').text() );
	      		
				// // Ce texte sera utilisé par les lecteurs d'écran, les moteurs de recherche, ou lorsque l'image ne peut être chargée.
				// // NsHook.js?nnivjs:13 Le titre apparait sous la forme d'une infobulle lorsque l'utilisateur survole l'image avec sa souris.

	   //    	});
	     	

	   //  });


		//Dès qu'il y a une requette ajax sur l'edition de balades
	    $('.node-form.node-balade-form').ajaxComplete(function(event, xhr, settings) {
		    	
		    
		    //console.log($(event));

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


		    
		    // if ($(event.target.id) == 'edit-field-photo-resume-und-0-upload-button--2') {
		      

		    //   // Your code here
		    //   console.log('toto');

		    // }
	    });



	    //Upload Photo résume
	    /*$('.field-name-field-photo-resume', context).change(function () {

			$(this).find('.form-type-textfield').each(function(index){
	      		
	  			console.log('rsume : '+$(this).find('.description').text());


	      	});

	    });*/
    

    } //Fin attach
  };


})(jQuery);