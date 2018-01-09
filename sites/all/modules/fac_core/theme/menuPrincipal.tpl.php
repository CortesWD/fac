<?php global $base_url; ?>
<ul class="menu-nav">
	<?php foreach ($variables['menu'] as $key => $value) { ?>
		<li><a href="<?php print $base_url.'/'.$value['path']; ?>"><img src='<?php print $value['icon']; ?>' title="Nuestra fuerza" alt="Nuestra fuerza"/><span><?php print $value['title']; ?></span></a></li>
	<?php } ?>
</ul>