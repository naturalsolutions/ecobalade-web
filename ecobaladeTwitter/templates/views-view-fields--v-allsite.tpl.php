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
  global $base_path, $base_url;
?>
	
	<?php foreach ($fields as $id => $field): ?>
		
		<?php if ($id == 'counter') : ?>
					<?php if (!empty($field->content)): ?>
							<?php 
								$count = $field->content; 
							?>
					<?php endif; ?>
		<?php endif;?>
			
		<?php if ($id == 'field_esp_ces_pr_sentent') : ?>
					<?php if (!empty($field->content)): ?>
							<?php 
								$espece = $field->content; 
							?>
					<?php endif; ?>
		<?php endif;?>		
		
		<?php if ($id == 'field_latitude') : ?>
					<?php if (!empty($field->content)): ?>
							<?php 
								$lat = $field->content; 
								/* $array_lat[$count] = $lat;	 */
							?>
					<?php endif; ?>
		<?php endif;?>
			
		<?php if ($id == 'field_longitude') : ?>
					<?php if (!empty($field->content)): ?>
							<?php 
								$long = $field->content; 
								/* $array_long[$count] = $long;	 */
							?>
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

<?php 	$nbr = substr_count($espece, ','); ?>
<div id="nbr_especes">
	<span>Nombre d'espèces:</span>
	<div class="nbr"><?php echo ($nbr+1); ?></div>
</div>


	<script type="text/javascript" > 
    
        var req = {'rect': {'sw': {'lat': <?php echo ($lat - 0.05); ?>, 'lng':<?php echo ($long - 0.05); ?>}, 'ne': {'lat':<?php echo ($lat + 0.05); ?>, 'lng':<?php echo ($long + 0.05); ?>}}};
        var list_ex_options = {'width': 200, 'height': 100, 'columns': 1, 'croppedPhotos': true};
        var list_ex_widget = new panoramio.PhotoListWidget('img<?php echo ($count); ?>', req, list_ex_options);
        list_ex_widget.setPosition(0);
    
</script>
