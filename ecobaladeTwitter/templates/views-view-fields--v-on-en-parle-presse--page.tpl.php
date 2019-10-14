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
		<?php if ($id == 'title') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $title =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>


		<?php if ($id == 'field_presse_image') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $image =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'body') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $body =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'field_presse_audio') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $audio =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'field_presse_video') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $video =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'field_presse_pdf') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $pdf =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>


<?php endforeach; ?>

 
<!-- 1 Article -->
<h2><?php echo $title; ?></h2>
<div class="row-fluid">

	<?php if($image || $pdf): ?>
	<div class="span4 imageZonePress">
		<?php echo $image; ?>
		<?php if($pdf) echo $body; ?>		
	</div>
	<?php endif; ?>

	<div class="span8 textZonePress">
		
		<?php if(!$pdf) echo $body; ?>
		
		<?php if($audio): ?>
		<br/>
		<audio controls="controls">
		   <source src="<?php echo $audio; ?>" type="audio/mp3" />		   
		</audio> 
		<?php endif; ?>
		
		<?php if($video): ?>
		<br/>
		<iframe width="100%" height="315" src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
		<?php endif; ?>

		<?php if($pdf): ?>
		<br/>
		<?php echo $pdf; ?>
		<?php endif; ?>
	</div>
</div>