<?php
/**
 * Created by PhpStorm.
 * User: upwardstech
 * Date: 9/6/2016
 * Time: 1:46 PM
 */

?>
<article <?php post_class(); ?>>
    <header>
        <?php get_template_part('templates/entry-meta'); ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-info">
            <p class="publishBy"><?php the_author() ?></p>
            <p class="time-publish"><?php echo get_the_date( 'F j, Y' ); ?></p>
        </div>
    </header>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>
