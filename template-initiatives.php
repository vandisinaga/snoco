<?php
/**
 * Template Name: Initiatives Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>



<?php
$initiative_page_content = get_field('initiative_page_content');
?>

<div class="outer-container-content">
  <p><?php echo $initiative_page_content ?></p>
</div>
<div class="box-link-container">

  <?php
  $box_link = get_field('box_link');
  if($box_link):
  $i=0;
  foreach($box_link as $list):
  $image = $list['box_link_image'];

  $image_source = '';
  $image_title = '';

  if(strlen($image['url']) > 0)
  {
    $image_source = $image['url'];
    $image_title = $image['title'];
  }

  $box_link_url = $list['box_link_url'];
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
<?php
$facebook = get_field('facebook', 'option');
$facebook_logo = get_field('facebook_logo', 'option');
$twitter = get_field('twitter', 'option');
$twitter_logo = get_field('twitter_logo', 'option');
$linkedin = get_field('linkedin', 'option');
$linkedin_logo = get_field('linkedin_logo', 'option');
?>
<div class="social-media">
  <a href="<?php echo $linkedin ?>" class="social-icon">
    <img src="<?php echo $linkedin_logo['url'] ?>" alt="<?php echo $linkedin_logo['title'] ?>" class="img-responsive"/>
  </a>
  <a href="<?php echo $twitter ?>" class="social-icon">
    <img src="<?php echo $twitter_logo['url'] ?>" alt="<?php echo $linkedin_logo['title'] ?>" class="img-responsive"/>
  </a>
  <a href="<?php echo $facebook ?>" class="social-icon">
    <img src="<?php echo $facebook_logo['url'] ?>" alt="<?php echo $linkedin_logo['title'] ?>" class="img-responsive"/>
  </a>
</div>
<div class="clearfix"></div>