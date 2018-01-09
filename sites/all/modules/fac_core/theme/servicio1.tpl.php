<div class="noticia-container">
  <!--Noticia-->
  <!--overlay-->
  <div class="overlay">
    <h3 class="overlay-titulo"><a href="<?php print drupal_get_path_alias('node/'.$variables['noticias'][0]->nid); ?>">
        <?php print $variables['noticias'][0]->title; ?>
        </a></h3><a class="btn btn-more" href="<?php print $variables['noticias']['path']; ?>"><?php print $variables['noticias']['tax']; ?></a>
  </div>
  <!--/-overlay--><img src="<?php print image_style_url("682x544", $variables['noticias'][0]->field_image['und'][0]['uri']); ?>" title="Una Noticia" alt="Una Noticia"/>
  <!--/-Noticia-->
</div>