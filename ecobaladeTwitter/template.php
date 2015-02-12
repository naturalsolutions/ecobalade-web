<?php 
/*permet de de créer une template de type page pour un type de contenu*/
function  ecobaladeTwitter_preprocess_page(&$vars) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
	 if (module_exists('comment')) {
		//$vars['comments'] = comment_node_view($vars['node'],'full');
		$vars['comment_form'] =drupal_get_form("comment_node_{$vars['node']->type}_form", (object) array('nid' => $vars['node']->nid));
	}
  }
}

function ecobaladeTwitter_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == 'footer') {
    $variables['theme_hook_suggestions'][] = 'region__footer';
  }
 }

 function ecobaladeTwitter_preprocess_html(&$variables) {
   // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie8-and-below.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
} // end preprocess_html

/***************CUSTOM CONTACT FORM MODULE**************************/
function ecobaladeTwitter_form_contact_site_form_alter(&$form, &$form_state) {
  drupal_set_title('FAQ');
}
/**
 * Add theme call to define the contact form template and path
 */
function ecobaladeTwitter_theme() {
	// return array(
 //   		'contact_site_form' => array(
	// 					'render element' => 'form',
	// 					'template' => 'contact-site-form',
	// 					'path' => drupal_get_path('theme', 'ecobaladeTwitter').'/templates',
	// 						),
 //  			);

   $items = array();
   
   $items['contact_site_form'] = array(
     'render element' => 'form',
      'template' => 'contact-site-form',
      'path' => drupal_get_path('theme', 'ecobaladeTwitter').'/templates',
    );
   $items['user_login'] = array(
     'render element' => 'form',
     'path' => drupal_get_path('theme', 'ecobaladeTwitter') . '/templates',
     'template' => 'user-login',
   );
   $items['user_register_form'] = array(
     'render element' => 'form',
     'path' => drupal_get_path('theme', 'ecobaladeTwitter') . '/templates',
     'template' => 'user-register-form',
   );
   
   return $items;
}
/**
 * Preproccess call to process the site contact form
 */
function ecobaladeTwitter_preprocess_contact_site_form(&$variables)
{
	//an example of setting up an extra variable, you can also put this directly in the template
	$variables['info'] = 'Please fill in the fields below to contact us';
	//this is the contents of the form
	$variables['contact'] = drupal_render_children($variables['form']);
 
}



function ecobaladeTwitter_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Adding the title of the current page to the breadcrumb.
    $breadcrumb[] = drupal_get_title();
    
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}