// Beahavous Drupal, pour exectuter le script si il y a des modifications dans le DOM
Drupal.behaviors.exampleModule = {
  attach: function (context, settings) {
	

	//Action form Popup
	$('form#mc-embedded-subscribe-form').submit(function(e){

		inputElementText = $('input#mce-EMAIL');
		
		var email = inputElementText.val();
				
		if (email !== "") {  // If something was entered
		    
		    //Mail non valide 
		    if (!isValidEmailAddress(email)) {		        
		        
	        	inputElementText.attr('style','border-color:#AE0A02 !important;');		        		        
		        return false;  

		     //Mail valide
		    }else {

		    	//sendMail(email);
		    	inputElementText.attr('style','border-color:#4DBB74 !important;');		    
		    	$('#cboxClose').trigger('click');
		    }

		}else {
			
			shakeForm(inputElementText);
			return false;
		}

		/*
		ta call NsSendMailFromJS.module 
		function sendMail(email) {

			var basePath = window.location.protocol + "//" + window.location.host +  window.location.pathname; 		    
 		    $.get(basePath+"send_mail_from_js_callback/"+ email);
		
		}
		*/
		

		function shakeForm(element) {
			
			var l = 10;  
			element.attr('style','border-color:#BFBFBF !important;');
			for( var i = 0; i < 10; i++ ) element.animate( { 'margin-left': "+=" + ( l = -l ) + 'px' }, 50);  
		}

		function isValidEmailAddress(emailAddress) {
		    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
		    return pattern.test(emailAddress);
		};

	});
    
    setTimeout(function(){ 
    
      $('body.page-liste-balades .newBalade').fadeIn();
      $('body.node-type-balade .newBalade').fadeIn();
    
    }, 1000);

  }
};

