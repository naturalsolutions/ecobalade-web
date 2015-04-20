<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $id => $field): ?>
  
  <?php if ($id == 'created') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $created =  $field->content; ?>
    <?php endif; ?>
  <?php endif;?>

  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>
		
<?php 
date_default_timezone_set('Europe/Paris');

//Date du jour
$today = new DateTime('NOW');

// On convertie la date de creation en formatDateTime pour diff php
$tabOfCreatedDate = explode('/', $created); 

$day = $tabOfCreatedDate[1]; 
$month = strip_tags($tabOfCreatedDate[0]);
$tabOfCreatedDate1 = explode('-', $tabOfCreatedDate[2]); 
$year = trim($tabOfCreatedDate1[0]); 

//On creer notre deuxieme dateTime avec les valeur réperer en splitant la date created envioyé par la vue
$DateCreated = new DateTime();
$DateCreated->setDate($year, $month, $day);

//Comparaison des deux dates
$diff = $today->diff($DateCreated);
$nbDaysDiff = $diff->days; 

//Si le nombre de jour < 60, cad 2 mois alors on affiche le logo nouvelle balade
if($nbDaysDiff < 60) echo "<p class='newBalade'>Nouveau !</p>";

?>