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
			<?php if ($id == 'path_1') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $lien_espece =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>


	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'nid') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $nid = $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>

				<?php
				global $base_url;
				// On récupère le titre de la balade et le nom machine de l'espèces du URL
				$lien_espece_url = explode ('/espece/', $lien_espece);
				$lien_espece_url = $lien_espece_url[1];

				?>

	<div class='row-fluid'>
		<div class='span12' id="containerOf1Specie">
				<div  id="image_specie">
	  					<?php echo $image_espece; ?>
				</div>
				<div  id="title_specie">
						<h3><?php echo $title_espece; ?></h3>
				</div>

				<div class='<?php echo($groupe_taxo)?>'></div>

		</div>
	</div>



