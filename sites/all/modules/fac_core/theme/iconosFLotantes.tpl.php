<?php global $base_url; ?>
<div class="row">
  	<div class="lista-iconos">
	  	<?php $cont = 0; ?>
	  	<?php foreach ($variables['iconos'] as $key => $value) { ?>
	  		<?php if($cont <= 8){ ?>
	  			<a href="<?php print $value->field_url_path['und'][0]['value']; ?>" target="_blank">
			  		<img src="<?php print  file_create_url($value->field_image['und'][0]['uri']); ?>" title="<?php print $value->title; ?>" alt="<?php print $value->title; ?>"/>
			  	</a>
	  		<?php } ?>
	  		<?php if($cont == 9){ ?>
	  			<a class="btn-more" href="#" target="_blank">
					<img src="<?php print $base_url; ?>/sites/all/themes/adaptivetheme/at_fac/images/icons/more.png"/>
				</a>
	  		<?php } ?>
		<?php $cont++; } ?>
		<?php $cont = 0; ?>
		<div class="lista-horizontal">
			<?php foreach ($variables['iconos'] as $key => $value) { ?>
				<?php if($cont > 9){?>
					<a href="<?php print $value->field_url_path['und'][0]['value']; ?>" target="_blank">
			    		<img src="<?php print  file_create_url($value->field_image['und'][0]['uri']); ?>" title="<?php print $value->title; ?>" alt="<?php print $value->title; ?>"/>
			    	</a>
		  		<?php } ?>
			<?php $cont++; } ?>
		</div>
    </div>
  </div>