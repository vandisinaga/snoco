<?php
/**
 * Template Name: Live-healty Template
 */
?>

<h1 class="title-page">
  <?php
  $the_title = get_field('content_title');
  ?>
  <?php if(strlen($the_title) > 0): ?>
    <?php echo $the_title; ?>
  <?php endif; ?>
</h1>


<?php while (have_posts()) : the_post(); ?>
<div class="outer-container-content">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>

<?php
$poster_live_healty_image = get_field('poster_live_healty_image');
$poster_live_healty_title = get_field('poster_live_healty_title');
$poster_live_healty_list = get_field('poster_live_healty_list');
?>

<?php if(strlen($poster_live_healty_title) > 0): ?>
  <div class="live-healthy-poster-outer-container">
    <div class="live-healthy-poster-container">
      <div class="poster-image">
        <img src="<?php echo $poster_live_healty_image['url']?>" alt="<?php echo $poster_live_healty_image['title']?>" class="img-responsive">
      </div>

      <div class="poster-description">
        <h1 class="title-banner"><?php echo $poster_live_healty_title?></h1>
        <?php echo $poster_live_healty_list?>
      </div>

    </div>
    <div class="clearfix"></div>
  </div>
<?php endif; ?>

<?php
$why_to_get_involved_content = get_field('why_to_get_involved_content');
$why_to_get_involved_content_image = get_field('why_to_get_involved_content_image');
?>

<?php if(strlen($why_to_get_involved_content) > 0): ?>
  <div class="why-to-get-involved-container">
    <div class="why-to-get-involved-content">
      <?php echo $why_to_get_involved_content ?>
    </div>
    <a href="<?php echo $why_to_get_involved_content_image['url']?>">
      <img src="<?php echo $why_to_get_involved_content_image['url']?>" alt="<?php echo $why_to_get_involved_content_image['title']?>">
    </a>
  </div>
<?php endif; ?>

<?php
$services = get_field('services');
?>
<?php if(strlen($services['title']) > 0): ?>
  <div class="services-container">
    <div class="services-image">
      <img src="<?php echo $services['url']?>" alt="<?php echo $services['title']?>" class="img-responsive">
    </div>
    <div class="services-content">

    </div>
  </div>
<?php endif; ?>



<div class="box-link-container">
  <?php
  $box_link = get_field('live_healty_button_bottom','option');
  if($box_link):
    $i=0;
    foreach($box_link as $list):
      $image = $list['live_healty_button_bottom_image'];

      $image_source = '';
      $image_title = '';

      if(strlen($image['url']) > 0)
      {
        $image_source = $image['url'];
        $image_title = $image['title'];
      }

      $box_link_url = $list['live_healty_button_bottom_url'];
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
  $box_link = get_field('live_healty_social_media','option');
  if($box_link):
    $i=0;
    foreach($box_link as $list):
      $image = $list['live_healty_social_media_image'];

      $image_source = '';
      $image_title = '';

      if(strlen($image['url']) > 0)
      {
        $image_source = $image['url'];
        $image_title = $image['title'];
      }

      $box_link_url = $list['live_healty_media_url'];
      ?>
      <a href="<?php echo $box_link_url ?>">
        <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
      </a>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
<div class="clearfix"></div>




