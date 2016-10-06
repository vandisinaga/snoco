<?php
/**
 * Template Name: Live-healty Template
 */
?>

<?php
$the_title = get_field('content_title');
?>
<?php if(strlen($the_title) > 0): ?>
  <h1 class="title-page">
    <?php echo $the_title; ?>
  </h1>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<div class="outer-container-content">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>

<?php if(is_page('what-is-lh2020')): ?>
<?php elseif(is_page('how-it-works')): ?>
    <?php
    $how_it_works_image = get_field('how_it_works_image');
    ?>
    <?php if(strlen($how_it_works_image['title']) > 0): ?>
        <div class="live-healthy-outer-container">
            <div class="live-healthy-inner-container">
                <div class="services-container">
                    <div class="services-image">
                        <img src="<?php echo $how_it_works_image['url']?>" alt="<?php echo $how_it_works_image['title']?>" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <?php endif; ?>
<?php elseif(is_page('community-portal')): ?>
<?php elseif(is_page('become-a-signatory')): ?>
<?php elseif(is_page('why-join')): ?>
    <?php
    $poster_why_join_image = get_field('poster_why_join_image');
    $poster_why_join_title = get_field('poster_why_join_title');
    $poster_why_join_list = get_field('poster_why_join_list');
    $why_to_get_involved_content = get_field('why_to_get_involved_content');
    $why_to_get_involved_content_image = get_field('why_to_get_involved_content_image');
    ?>

    <?php if(strlen($poster_why_join_title) > 0): ?>
        <div class="live-healthy-poster-outer-container">
            <div class="live-healthy-poster-container">
                <div class="poster-image">
                    <img src="<?php echo $poster_why_join_image['url']?>" alt="<?php echo $poster_why_join_image['title']?>" class="img-responsive">
                </div>

                <div class="poster-description">
                    <h1 class="title-banner"><?php echo $poster_why_join_title?></h1>
                    <?php echo $poster_why_join_list?>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    <?php endif; ?>
<?php endif;?>


    <?php if( have_rows('live_healthy_button_bottom', 'option') ): ?>
        <div class="box-link-container">
            <?php while( have_rows('live_healthy_button_bottom', 'option') ): the_row();

                // vars
                $image = get_sub_field('live_healthy_button_bottom_image', 'option');
                $link = get_sub_field('live_healthy_button_bottom_url', 'option');

                ?>

            <div class="col-sm-3 col-xs-6 box-link-inner-container">
                <div class="row">
                    <div class="box-menu-image">
                        <a href="<?php echo $link ?>">
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['url'] ?>" class="img-responsive"/>
                        </a>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <div class="clearfix"></div>
        </div>
    <?php endif; ?>



