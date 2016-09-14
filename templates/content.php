<div class="article-outer-container">
  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
      <?php $post_link_url = get_field('post_link_url');?>
      <a href="<?php echo $post_link_url?>">More..</a>
    </div>
</article>
</div>
