<?php
/**
 * Template Name: News Template
 */
?>


<div class="article-outer-container">
    <?php if (is_page('press-mentions')): ?>
        <?php query_posts('category_name=press-mentions') ?>
    <?php elseif (is_page('press-releases')): ?>
        <?php query_posts('category_name=press-releases') ?>
    <?php endif; ?>
    <?php while (have_posts()) : the_post();?>
        <div class="article-container">
            <div class="article-content">
                <?php get_template_part('templates/content-list-news'); ?>
            </div>
        </div>
    <?php  endwhile;  ?>
</div>