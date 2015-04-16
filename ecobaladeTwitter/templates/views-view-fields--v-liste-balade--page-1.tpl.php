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
		

<!--
<?php $today = date("d/m/Y - H:i"); ?>
<?php $tabOfCreatedDate = explode('/', $created); ?>
<?php echo 'd:'.$day = $tabOfCreatedDate[0].'<br/>'; ?>
<?php echo 'm:'.$month = $tabOfCreatedDate[1].'<br/>'; ?>
<?php $tabOfYearAndTime = explode('-', $created); ?>
<?php $tempTab1 = explode('/', $str); ?>

<?php 
	
	$DateCreated = new DateTime();
	$DateCreated->setDate(2001, 2, 3);

?>
<?php //echo 'today :'.$today.'<br/>'; ?>
<?php echo 'created: '.$created.'<br/>'; ?>

	<?php 

	    
    $diff = abs($today - $DateCreated); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    $retour = array();
 
    $tmp = $diff;
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
 
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;
 
	
	?>
	<pre><?php print_r($tabOfYearAndTime); ?></pre>
	<pre><?php print_r($tempTab1); ?></pre>
	
-->