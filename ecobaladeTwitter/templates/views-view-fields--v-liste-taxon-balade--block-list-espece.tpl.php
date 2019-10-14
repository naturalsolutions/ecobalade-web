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
			<?php if ($id == 'nothing') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $image_espece =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'title') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $title_espece =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_description') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $descro_espece =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'view_node') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $lien_espece =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>

	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'nid') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $nid_balade =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>

	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'nid_1') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $nid_espece =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_groupe_taxonomique') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $groupe_taxo =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>

	<?php global $base_url; ?>
	<div class='row-fluid'>
		<div class='span12' id="containerOf1Specie">
			<div class='row-fluid'>
				<div class='span2' id="image_specie">
						<?php echo $image_espece; ?>
				</div>
				<div class='span2' id="title_specie">
						<?php echo $title_espece; ?>
				</div>
				<div class='span6' id="descro_specie">
						
				<?php 
				$descro_espece = drupal_html_to_text($descro_espece); 	
				
					//Sin on vient d'un texte brut dans balises
				if($descro_espece[0] != '<'){

					echo '<p>'.$descro_espece.'</p>';

				}else{

					//Si on vient d'un plain texte avec wisiwig et balise
					echo $descro_espece;
												
				}

				?>
				</div>
				<div class='span2' id="lien_specie">

						<a href='<?php echo "$base_url/node/".strip_tags($nid_espece."?idlastbal=".$nid_balade); ?>' title='<?php echo strip_tags($title_espece); ?>'>voir</a>
												
				</div>
				<?php if($groupe_taxo == 'Petites bêtes') $groupe_taxo = 'Insectes'; ?>
				<div class='<?php echo($groupe_taxo)?>'></div>
			</div>	
			
		</div>
	</div>