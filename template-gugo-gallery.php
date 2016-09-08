<?php
/**
 * Template Name: Gugo gallery Template
 */
?>


<h1 class="title-page"><?php echo the_title();?></h1>

<div class="gugo-gallery-container">
  <?php
  $gugo_gallery = get_field('gugo_gallery');
  if($gugo_gallery):
    $i=0;
    foreach($gugo_gallery as $list):
      $image = $list['gugo_gallery_image'];

      $image_source = '';
      $image_title = '';

      if(strlen($image['url']) > 0)
      {
        $image_source = $image['url'];
        $image_title = $image['title'];
      }
      $gugo_gallery_title = $list['gugo_gallery_title'];
      ?>

      <div class="gugo-gallery-image-outer-container">
        <div class="gugo-gallery-image-inner-container">
          <div class="gugo-gallery-image">
            <a href="" class="img-responsive">
              <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
            </a>
          </div>
        </div>
        <div class="gugo-gallery-image-description">
          <a href="">
            <p><?php echo $gugo_gallery_title?></p>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
  <?php endif; ?>
</div>


<div class="box-link-container">
  <?php
  $box_link = get_field('gugo_button_bottom','option');
  if($box_link):
    $i=0;
    foreach($box_link as $list):
      $image = $list['gugo_button_bottom_image'];

      $image_source = '';
      $image_title = '';

      if(strlen($image['url']) > 0)
      {
        $image_source = $image['url'];
        $image_title = $image['title'];
      }

      $box_link_url = $list['gugo_button_bottom_url'];
      ?>
      <div class="col-sm-3 box-link-inner-container">
        <div class="row">
          <div class="box-menu-image">
            <a href="<?php echo $box_link_url ?>">
              <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
  <?php endif; ?>
</div>

<div class="social-media">
  <?php
  $box_link = get_field('gugo_social_media','option');
  if($box_link):
    $i=0;
    foreach($box_link as $list):
      $image = $list['gugo_social_media_image'];

      $image_source = '';
      $image_title = '';

      if(strlen($image['url']) > 0)
      {
        $image_source = $image['url'];
        $image_title = $image['title'];
      }

      $box_link_url = $list['gugo_social_media_url'];
      ?>
      <a href="<?php echo $box_link_url ?>">
        <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
      </a>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
<div class="clearfix"></div>




