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
    <?php get_template_part('templates/page-background'); ?>

    <?php if(is_front_page()): ?>

      <?php get_template_part('templates/front-page'); ?>

    <?php else: ?>

    <div class="wrap container" role="document">
      <div class="content row">
          <div class="content-outer">
                      <main class="main">
              <?php include Wrapper\template_path(); ?>
                     </main>
              <?php if (Setup\display_sidebar()) : ?>
              <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
              </aside>
             <?php endif; ?>
          </div>
      </div>
    </div>

    <?php endif ?>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
