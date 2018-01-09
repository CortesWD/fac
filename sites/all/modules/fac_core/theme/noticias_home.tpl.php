 <div class="row">
  <?php $cont=1; foreach ($variables['noticias'] as $key => $value) { 
    if($cont == 1){ ?>
      <article class="col-sm-6 noticia noticia-grande">
        <div class="noticia-container">
          <!--Noticia-->
          <!--overlay-->
          <div class="overlay">
            <h3 class="overlay-titulo"><a href="#">
                <?php print($value->title); ?>
                </a></h3><a class="btn btn-more" href="#">Noticia</a>
          </div>
          <!--/-overlay--><img src="<?php print image_style_url("682x544", $value->field_image['und'][0]['uri']); ?>" title="Una Noticia" alt="Una Noticia"/>
          <!--/-Noticia-->
        </div>
      </article>
   <?php }
   $cont++;
  } ?>
    <article class="col-sm-6 noticia">
      <?php $cont=1; foreach ($variables['noticias'] as $key => $value) { 
        if($cont == 2 || $cont == 3){ ?>
          <div class="col-sm-6">
            <div class="noticia-container noticia-cuadrado">
              <!--Noticia-->
              <!--overlay-->
              <div class="overlay">
                <h3 class="overlay-titulo"><a href="#">
                    <?php print($value->title); ?>
                    </a></h3><a class="btn btn-more" href="#">Noticia</a>
              </div>
              <!--/-overlay--><img src="<?php print image_style_url("682x544", $value->field_image['und'][0]['uri']); ?>" title="Una Noticia" alt="Una Noticia"/>
              <!--/-Noticia-->
            </div>
          </div>
        <?php }elseif($cont == 4){ ?>
          <div class="clearfix"></div>
            <div class="noticia-container noticia-horizontal">
              <!--Noticia-->
              <div class="noticia">
                <!--overlay-->
                <div class="overlay">
                  <h3 class="overlay-titulo"><a href="#">
                      <?php print($value->title); ?>
                      </a></h3><a class="btn btn-more" href="#">Noticia</a>
                </div>
                <!--/-overlay--><img src="<?php print image_style_url("682x544", $value->field_image['und'][0]['uri']); ?>" title="Una Noticia" alt="Una Noticia"/>
              </div>
              <!--/-Noticia-->
            </div>
        <?php } ?>
      <?php $cont++;} ?>
    </article>
  </div>