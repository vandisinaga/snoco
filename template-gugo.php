<?php
/**
 * Template Name: Gugo Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<?php
$gugo_background_caption = get_field('gugo_background_caption');
?>
<h1>
    <?php if(strlen($gugo_background_caption) > 0): ?>
        <?php echo $gugo_background_caption; ?>
    <?php endif; ?>
</h1>
