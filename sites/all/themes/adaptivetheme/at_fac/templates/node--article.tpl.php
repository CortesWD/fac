<?php 
  $nodo = node_load($node->nid);   
  $fecha_actualizacion = date('d/m/Y', $nodo->changed);
  $usuarioCreador = user_load($nodo->uid);

?>
<section class="cointainer-fluid bg-gris">
  <div class="row">
    <p class="breadcrumbs"><a href="index.html">Inicio</a><a class="current">Titulo de la noticia</a></p>
  </div>
</section>
<!--/-migas de pan-->
<!--contenido noticia-->
<section class="container-fluid">
  <div class="row row-content">
    <!--titulo-->
    <h1 class="text-title"><?php print $nodo->title; ?></h1>
    <!--/-titulo-->
    <!--Fecha de publicacion-->
    <p class="published"><i class="fa fa-calendar-o" aria-hidden="true"></i>	Actualizado el <?php print $fecha_actualizacion; ?></p>
    <!--/-Fecha de publicacion-->
    <p class="text-intro"><?php print $nodo->body['und'][0]['summary'];?></p>

    <img class="img-responsive" src="<?php print image_style_url("682x544", $nodo->field_image['und'][0]['uri']); ?>" title="<?php print $nodo->title; ?>" alt="<?php print $nodo->title; ?>"/>
    <p class="text-justify">
      <?php print $nodo->body['und'][0]['value'];?>
    </p>

    <!--Usuario-->
    <div class="clearfix"></div>
    <p class="usuario"><i class="fa fa-user" aria-hidden="true"> </i><strong><?php print $usuarioCreador->field_nombres['und'][0]['value'].' '.$usuarioCreador->field_apellidos['und'][0]['value'] ?></strong></p>
    <!--/-Usuario-->
    <!--<div class="etiquetas">
      <h5>Etiquetas</h5>
      <p><a class="badge" hre="#">Noticias</a><a class="badge" hre="#">FAC</a><a class="badge" hre="#">Comando</a></p>
    </div>-->