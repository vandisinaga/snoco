
<div class="article-outer-container">
  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="post-info">
        <p class="publishBy"><?php the_author() ?></p>
        <p class="time-publish"><?php echo get_the_date( 'F j, Y' ); ?></p>
      </div>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
      <?php $post_link_url = get_field('post_link_url');?>
      <a href="<?php echo $post_link_url?>" class="link-more">More..</a>
    </div>
  </article>
</div>
