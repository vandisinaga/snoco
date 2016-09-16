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
        <?php get_template_part('templates/page-background'); ?>
    <?php else: ?>
        <?php get_template_part('templates/page-background-pages'); ?>
        <?php global $post;?>

        <div class="second-menu-container">
            <div class="container">
                <div class="second-menu">
                    <nav class="navbar nav-primary">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#second-menu" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar "></span>
                            </button>
                            <div id="second-menu" class="collapse navbar-collapse">

                                <!--if page is advance-care-planning or child page from advance-care-planning-->
                                <?php if (is_page('advance-care-planning') ||($post->post_parent == 112)): ?>
                                    <?php wp_nav_menu('menu= Advanced Care Planning'); ?>

                                <!--if page is gear-up-go or child page from gear-up-go-->
                                <?php elseif (is_page('gear-up-go') || ($post->post_parent == 114)): ?>
                                    <?php wp_nav_menu('menu= Gear Up Go'); ?>

                                <!--if page is live-healthy-2020 or child page from live-healthy-2020-->
                                <?php elseif (is_page('live-healthy-2020') || ($post->post_parent == 116)): ?>
                                <?php wp_nav_menu('menu= Live Healthy 2020'); ?>

                                <?php endif; ?>
                            </div><!--/.nav-collapse -->
                        </div>
                        <div class="clearfix"></div>
                    </nav>
                </div>
            </div>
        </div>
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
