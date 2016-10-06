<?php
/**
 * Template Name: Gugo Template
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


<?php while (have_posts()) : the_post(); ?>
<div class="outer-container-content">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>



<?php if( have_rows('gugo_button_bottom', 'option') ): ?>
  <div class="box-link-container">
    <?php while( have_rows('gugo_button_bottom', 'option') ): the_row();

      // vars
      $image = get_sub_field('gugo_button_bottom_image', 'option');
      $link = get_sub_field('gugo_button_bottom_url', 'option');

      ?>

      <div class="col-sm-3 col-xs-6 box-link-inner-container">
        <div class="row">
          <div class="box-menu-image">
            <a href="<?php echo $link ?>">
              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['url'] ?>" class="img-responsive"/>
            </a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <div class="clearfix"></div>
  </div>
<?php endif; ?>







