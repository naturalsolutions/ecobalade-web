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
			<?php if ($id == 'field_groupe_taxonomique') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $groupe_taxo =  $field->content; 
							//echo($groupe_taxo);?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
		<?php switch($groupe_taxo){
					case 'Oiseaux':
							$oiseau = true;
							break;
					case 'Mammifères':
							$mamifere = true; 
							break;
					case 'Insectes':
							$insecte = true;
							break;
					case 'Reptiles':
							$reptile = true;
							break;
					case 'Arbres':
							$arbre = true; 
							break;
					case 'Arbustes et plantes':
							$arbuste = true;
							break;
					case 'Mollusque':
							$mollusque = true; 
							break;	
			}?>
			
			<div class='span2' id="specie_picto">
				<?php if($oiseau): ?>
				<div title='Les oiseaux' id='picto_oiseaux'></div>
				<?php endif; ?>
				<?php if($mamifere): ?>
				<div title='Les mammifères' id='picto_mamifere'></div>
				<?php endif; ?>
				<?php if($insecte): ?>
				<div title='Les petites bêtes' id='picto_insect'></div>
				<?php endif; ?>
				<?php if($reptile): ?>
				<div title='Les reptiles' id='picto_reptile'></div>
				<?php endif; ?>
				<?php if($arbre): ?>
				<div title='Les arbres' id='picto_arbre'></div>
				<?php endif; ?>
				<?php if($arbuste): ?>
				<div title='Les arbustes' id='picto_arbuste'></div>
				<?php endif; ?>
				<?php if($mollusque): ?>
				<div title='Les mollusques' id='picto_mollusque'></div>
				<?php endif; ?>
			</div>
			
			