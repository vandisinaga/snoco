<?php
/**
 * Template Name: ACP Template
 */
?>

<?php
$the_title = get_field('content_title');
?>
<?php if(strlen($the_title) > 0): ?>
  <h1 class="title-page">
      <?php echo $the_title; ?>
  </h1>
<?php endif; ?>

<div class="outer-container-content">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>

<div class="box-link-container">
  <?php
  $box_link = get_field('acp_button_bottom','option');
  if($box_link):
    $i=0;
    foreach($box_link as $list):
      $image = $list['acp_button_bottom_image'];

      $image_source = '';
      $image_title = '';

      if(strlen($image['url']) > 0)
      {
        $image_source = $image['url'];
        $image_title = $image['title'];
      }

      $box_link_url = $list['acp_button_bottom_url'];
      ?>
      <div class="col-sm-3 col-xs-6 box-link-inner-container">
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
  $box_link = get_field('acp_social_media','option');
  if($box_link):
    $i=0;
    foreach($box_link as $list):
      $image = $list['acp_social_media_image'];

      $image_source = '';
      $image_title = '';

      if(strlen($image['url']) > 0)
      {
        $image_source = $image['url'];
        $image_title = $image['title'];
      }

      $box_link_url = $list['acp_social_media_url'];
      ?>
      <a href="<?php echo $box_link_url ?>">
        <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
      </a>
    <?php endforeach; ?>
    <div class="clearfix"></div>
  <?php endif; ?>
</div>

