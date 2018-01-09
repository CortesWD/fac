  <div class="slider" id="slider-videos">
  <?php foreach ($variables['videos'] as $key => $value) { ?>
    <div class="item">
      <div class="item-text">
        <p><a href="#"><?php print $value->title; ?> </a></p>
      </div>
      <div class="multimedia">
        <div class="embed-responsive embed-responsive-16by9">
          <?php if(isset($value->field_url_video['und'][0]["video_id"])){ ?>
            
            <?php $ur =  'https://www.youtube.com/embed/'.$value->field_url_video['und'][0]['video_id']; ?>
            <iframe class="embed-responsive-item" width="560" height="315" src="<?php print $ur; ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen ></iframe>
          <?php }else{ ?>
            <video class="embed-responsive-item slider-video video-js" width="720" height="480" data-setup='{"controls":true, "autoplay":false,"preload": "auto"}'>
              <source src="<?php print file_create_url($value->field_archivo_video['und'][0]['uri']); ?>" type="video/mp4">
            </video>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>