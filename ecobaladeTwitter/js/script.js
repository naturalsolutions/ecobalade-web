// Beahavous Drupal, pour exectuter le script si il y a des modifications dans le DOM
Drupal.behaviors.exampleModule = {
  attach: function (context, settings) {

    setTimeout(function(){ 
    
      $('body.page-liste-balades .newBalade').fadeIn();
      $('body.node-type-balade .newBalade').fadeIn();
    
    }, 1000);

  }
};

