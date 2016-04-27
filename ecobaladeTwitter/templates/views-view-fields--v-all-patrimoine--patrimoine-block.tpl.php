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
<!-- Bloc texte description de la patrimoine -->
<div id="patrimoineZone">

	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'title') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $title_patrimoine =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>

	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_image') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $field_image =  $field->content; ?>
					<?php endif;?>
			<?php endif; ?>
	<?php endforeach; ?>

	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_image_1') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $field_image_1 =  $field->content; ?>
					<?php endif;?>
			<?php endif; ?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_description') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $descro_patrimoine =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'path') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $lien_patrimoine =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	<?php echo $lien_patrimoine; ?>
	

	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'uri') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $uri = $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>

	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'nid') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $nid = $field->raw; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>


	<?php 
	$monPatrimoine  = node_load($nid);
	?>

	<!-- Bloc texte description de la patrimoine -->

	<h4><?php echo $title_patrimoine."&nbsp;:&nbsp"; ?></h4>	
				
	<div class='row-fluid'>
		<div class='span12'>
				
			<div class='row-fluid descriptionPatrimoine'> 
				<div class='span12'>							
					<?php 
					$descro_patrimoine = drupal_html_to_text($descro_patrimoine); 	
					
						//Si on vient d'un texte brut dans balises
					if($descro_patrimoine[0] != '<'){

						echo '<p>'.$descro_patrimoine.'</p>';

					}else{

						//Si on vient d'un plain texte avec wisiwig et balise
						echo $descro_patrimoine;												
					}
					?>
				</div>
			</div>
		</div>				
	</div>

			<div class='row-fluid lesPatrimoinesImages'>			
  					<?php 
  					$imagesPatrimoines = field_get_items($entity_type = 'node', $monPatrimoine, $field_name = 'field_image');

  					//limiter le lightbox
  					if(!empty($imagesPatrimoines)) :

						for($i=0;$i<count($imagesPatrimoines);$i++) {

							$variables = array(
						        'style_name' => 'slideshow_detail_balade_full',
						        'path' => $imagesPatrimoines[$i]['uri'],
						        'width' => $imagesPatrimoines[$i]['width'],
						        'height' => $imagesPatrimoines[$i]['height'],
						        'title' => $imagesPatrimoines[$i]['title'],
								'alt' => $imagesPatrimoines[$i]['alt']
							);

							$titlePatrimoine = $variables['title'];
							$urlPatrimoine = file_create_url($variables['path']);
							// echo $urlPatrimoine;
						

							$imagePatrimoine = theme('image_style', $variables );
							

								echo "<div class='span4'>";
									echo '<figure class="patrimoine effect-zoe">';
										echo $imagePatrimoine; 
										echo "<a href='$urlPatrimoine' class='imagePatrimoine' title=\"$titlePatrimoine\"></a>";

										echo "<figcaption>";
											echo "<h3>$titlePatrimoine</h3>";											
										echo '</figcaption>';
									echo '</figure>';
								echo "</div>";
							
						 };
					 endif;
					 ?>


			</div> <!-- fin lesPatrimoines -->
</div> <!-- fin patrimoineZone -->
	



