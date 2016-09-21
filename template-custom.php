<?php
/**
 * Template Name: Template Custom
 */
?>
<?php if(is_page('initiatives')): ?>

<?php else: ?>
<div class="title-news">
  <h1 class="title-page"><?php the_title();?></h1>
</div>
<?php endif;?>

<div class="outer-container-content">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>
</div>
