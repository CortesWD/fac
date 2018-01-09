<?php global $base_url; ?>
<div class="revista-text">
    <h3><a href="<?php print drupal_get_path_alias('node/'.$variables['revista'][0]->nid); ?>"><?php print $variables['revista'][0]->title; ?></a></h3>
    <p><?php print $variables['revista'][0]->field_edicion['und'][0]['value']; ?></p><a class="btn btn-more" href="<?php print $base_url; ?>/galer-a-de-revistas">Galería de revistas</a>
  </div><a href="#"><img src="<?php print image_style_url("682x544", $variables['revista'][0]->field_portada['und'][0]['uri']); ?>" title="Revista #000" alt="Revista #000"/></a>