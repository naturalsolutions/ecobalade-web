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
 global $base_url;
?>


	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'title') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $title =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'body') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $descro =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>	
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'counter') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $count =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>	
	
		<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_latitude') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $lat =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>	
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_longitude') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $long =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'nothing') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $image =  $field->content; ?>
							
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>	
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_r_gion') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $region =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>	
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'field_esp_ces_pr_sentent') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $especes =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>	
	
	<?php foreach ($fields as $id => $field): ?>
			<?php if ($id == 'view_node') : ?>
					<?php if (!empty($field->content)): ?>
							<?php $savoirPlus =  $field->content; ?>
					<?php endif; ?>
			<?php endif;?>
	<?php endforeach; ?>	
	

	
	<div class='row-fluid' id='containerOf1Site'>
		<div class='span12' id="title_site">
			<div class='row-fluid' id="site_items">
				<?php echo $title; ?>
				<div class='row-fluid'>
					<div class='row-fluid'>
						<div class='span2' id="image_site">
							<?php echo $image; ?>
						</div>
						
						<div class='span10' id="descro_site">
							<?php echo $descro; ?>
						</div>
					</div>
					
					<div class='row-fluid'>
						<div class='span5' id="region_site">
							<span>Région</span>
							<?php echo $region; ?>
						</div>				
						<div class='span4' id="especes_site">
							<span>Espèces associées au site Natura 2000</span>
							<div class="field-content"><?php echo (substr_count($especes, ',')+1); ?></div>
						</div>				
						<div class='span3' id="bouton_savoirPlus">
							<?php echo $savoirPlus; ?>
						</div>
					</div>
					
				</div>		
			</div>
		</div>		
	</div>
	
	<script type="text/javascript">
		var url = '<?php echo ($base_url) ?>';
		$.ajax({
			url:(url+"/views/ajax")
		}).done(function() {
				lat_no = '<?php echo ($lat) ?>';
				lat_no = (parseFloat(lat_no))-0.05;
				var lat_se = '<?php echo ($lat) ?>';
				lat_se = (parseFloat(lat_se))+0.05;
				var long_no = '<?php echo ($long) ?>';
				long_no = (parseFloat(long_no))-0.05;
				var long_se = '<?php echo ($long) ?>';
				long_se = (parseFloat(long_se))+0.05;
				
				var req = {'rect': {'sw': {'lat': lat_no, 'lng': long_no}, 'ne': {'lat': lat_se, 'lng': long_se}}};
				var list_ex_options = {'width': 200, 'height': 100, 'columns': 1, 'croppedPhotos': true};
				var list_ex_widget = new panoramio.PhotoListWidget('img<?php echo ($count); ?>', req, list_ex_options);
				list_ex_widget.setPosition(0);
		});
	</script>
