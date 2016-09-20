<?php
/**
 * Template Name: News Template
 */
?>


<div class="title-news">
    <h1 class="title-page">IN THE NEWS</h1>
</div>

    <?php if (is_page('press-mentions')): ?>
        <?php query_posts('category_name=press-releases') ?>
        <?php while (have_posts()) : the_post();?>
            <?php get_template_part('templates/content'); ?>
        <?php  endwhile;  ?>
    <?php elseif (is_page('press-releases')): ?>
        <?php query_posts('category_name=press-releases') ?>
        <?php while (have_posts()) : the_post();?>
            <?php get_template_part('templates/content'); ?>
        <?php  endwhile;  ?>
    <?php elseif (is_page('event-recaps')): ?>
        <?php query_posts('category_name=event-recaps') ?>
        <?php while (have_posts()) : the_post();?>
            <?php get_template_part('templates/content'); ?>
        <?php  endwhile;  ?>
    <?php elseif (is_page('Media Kit/Resources')): ?>
        <?php query_posts('category_name=media-kit') ?>
        <?php while (have_posts()) : the_post();?>
            <?php get_template_part('templates/content'); ?>
        <?php  endwhile;  ?>
        <?php else:?>
            <div class="gravity-form-container">
                <?php echo do_shortcode('[gravityform id="1" title="true" description="true" tabindex="40"]'); ?>
            </div>
            <?php while (have_posts()) : the_post(); ?>
                <div class="outer-container-content">
                    <?php get_template_part('templates/page', 'header'); ?>
                    <?php get_template_part('templates/content', 'page'); ?>
                </div>
            <?php endwhile; ?>
    <?php endif; ?>




