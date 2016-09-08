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

    <?php else: ?>
        <?php get_template_part('templates/page-background-pages'); ?>
        <?php $parents = get_post_ancestors($post);
        foreach($parents as $page_id){
            if($page_id == 83){ ?>
                <div class="second-menu-container">
                    <div class="container">
                        <ul class="second-menu">
                            <?php

                            $args = array(
                                'child_of' => get_top_ancestor_id(),
                                'title_li' => '',
                                'order-by' => date,
                                'sort_column'=> date,
                                'sort_order'=> asc,
                            );
                            ?>
                            <?php wp_list_pages($args); ?>
                        </ul>
                    </div>
                </div>
<!--                --><?php
//                global $post;
//                $top_parents = get_post_ancestors( $post->ID );
//                $list_children = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=0' );
//                if ($top_parents[0] == 83) :
//                    if ( $list_children) : ?>
<!--                        <div class="second-menu-container">-->
<!--                            <div class="container">-->
<!--                                <ul class="second-menu">-->
<!--                                    --><?php //echo $list_children; ?>
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    --><?php //endif; ?>
<!--                --><?php //endif;?>
                <?php break; //Match found, no need to keep checking
            }
        }?>
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

    <?php endif ?>


    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
