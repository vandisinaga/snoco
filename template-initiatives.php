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
$initiative_page_content = get_field('$initiative_page_content');
?>

<div class="about-container-content">
  <?php echo $initiative_page_content ?>
</div>



