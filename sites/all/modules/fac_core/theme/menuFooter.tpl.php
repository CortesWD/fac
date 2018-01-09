<?php global $base_url; ?>
<ul class="col-sm-4 col-sm-offset-4 menu-footer">
	<?php foreach ($variables['menu'] as $key => $value) { ?>
    	<li><a href="<?php print $base_url.'/'.$value['path']; ?>"><?php print $value['title']; ?></a></li>
    <?php } ?>
  </ul>