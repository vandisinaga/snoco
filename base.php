<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <?php if(is_front_page()): ?>
      <?php get_template_part('templates/page-background'); ?>
      <?php get_template_part('templates/front-page'); ?>

    <?php elseif(is_home()): ?>
        <?php get_template_part('templates/page-background-pages'); ?>
    <?php else: ?>
        <?php get_template_part('templates/page-background-pages'); ?>
        <?php global $post;?>

        <?php if ( is_page_template('template-acp.php' )|| is_page_template('template-acp-news.php' )) {?>
            <?php get_template_part('templates/menu-acp'); ?>
        <?php } elseif( is_page_template('template-gugo.php' )|| is_page_template('template-gugo-news.php' )) {?>
            <?php get_template_part('templates/menu-gugo'); ?>
        <?php } elseif( is_page_template('template-live-healty.php' )) {?>
            <?php get_template_part('templates/menu-livehealth'); ?>
        <?php }?>
    <?php endif ?>

    <div class="wrap container" role="document">
      <div class="content row">
          <div class="content-outer">
            <main class="main">
                <div class="row">
                    <?php include Wrapper\template_path(); ?>
                </div>
            </main>
              <?php if (Setup\display_sidebar()) : ?>
              <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
              </aside>
             <?php endif; ?>
          </div>
      </div>
    </div>



    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
