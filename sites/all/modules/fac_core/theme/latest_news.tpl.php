<?php
global $base_url;
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
?>
<?php foreach($data as $lat_news){ $nodo = node_load((int)$lat_news['nid']);?>
  <?php $fecha = date('d', $nodo->created)." de ".$meses[date('n', $nodo->created)]." de ".date('Y', $nodo->created); ?>
  <div class="col-sm-4">
    <div class="destacado"><a class="destacado-img" href="#"><img src="<?php print image_style_url("682x544", $nodo->field_image['und'][0]['uri']); ?>" title="titulo de noticia" alt="titulo de noticia"/></a>
      <div class="destacado-content">
        <h3 class="destacado-title"><a href="<?php print drupal_get_path_alias('node/'.$nodo->nid); ?>"><?php print $nodo->title; ?></a></h3>
        <p class="destacado-fecha text-right"><?php print $fecha; ?></p>
      </div>
    </div>
  </div>
<?php } ?>
<div class="clearfix"></div>
<div><?php echo $paging;?></div>