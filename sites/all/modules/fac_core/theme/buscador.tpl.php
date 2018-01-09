<?php global $base_url; ?>
<div class="col-sm-3 col-xs-12">
	<div class="container-buscador">
	  	<?php 
	  		$block = module_invoke('search', 'block_view');
			print render($block['content']);
		?>
	</div>
	<div class="fecha">
	  <p class="text-right"><?php
	  	$meses = array(
	  		1 => 'Enero',
	  		02 => 'Febrero',
	  		03 => 'Marzo',
	  		04 => 'Abril',
	  		05 => 'Mayo',
	  		06 => 'Junio',
	  		07 => 'Julio',
	  		08 => 'Agosto',
	  		09 => 'Septiembre',
	  		10 => 'Octubre',
	  		11 => 'Noviembre',
	  		12 => 'Diciembre'
	  	);
	  	$dias = array(
	  		'Mon' => 'Lunes',
	  		'Tue' => 'Martes',
	  		'Wed' => 'Miercoles',
	  		'Thu' => 'Jueves',
	  		'Fri' => 'Viernes',
	  		'Sat' => 'Sabado',
	  		'Sun' => 'Domingo'
	  	);
	  	$date = new DateTime(date());
	  	echo $dias[date('D')].", ".date('d')." de ".$meses[date('n')]." de ".date('Y')." - ".date('H:i:s');
		?>
		</p>
	</div>
</div>