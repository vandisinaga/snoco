<?php
$style = '';
$home_page_background = get_field('home_page_background', 'option');
if(strlen($home_page_background['url']) > 0)
{
    $style = "background-image: url('".$home_page_background['url']."');";
}
?>
<div class="home-page-background" style="<?php echo $style; ?>">
    <div class="container">
        <div class="home-page-background-caption">
            <?php
            $home_page_background_caption = get_field('home_page_background_caption', 'option');
            ?>
            <?php if(strlen($home_page_background_caption) > 0): ?>
                <?php echo $home_page_background_caption; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
$banner = get_field('initiative_buttons', 'option');
?>

<?php get_template_part('templates/initiative-button'); ?>

<!--<div class="initiative-buttons-ounter-container">-->
<!--    <div class="container">-->
<!--        --><?php //if($banner): ?>
<!--            --><?php //$i=0; foreach($banner as $list): ?>
<!--                --><?php
//                $image = $list['initiative_buttons_image'];
//
//                $image_source = '';
//                $image_title = '';
//
//                if(strlen($image['url']) > 0)
//                {
//                    $image_source = $image['url'];
//                    $image_title = $image['title'];
//                }
//
//                $title = $list['initiative_buttons_title'];
//                ?>
<!---->
<!--                --><?php //if(strlen($title) > 0): ?>
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 initiative-buttons-box">-->
<!--                        <div class="row">-->
<!--                            <div class="initiative-buttons-content">-->
<!--                                <h1 class="initiative_buttons_title">--><?php //echo $title ?><!--</h1>-->
<!--                                <div class="initiative-buttons-content-inner">-->
<!--                                    <img src="--><?php //echo $image_source ?><!--" alt="--><?php //echo $image_title ?><!--" class="img-responsive"/>-->
<!--                                    <div class="initiative-button">-->
<!--                                        <a href="--><?php //the_permalink(); ?><!--" class="btn btn-initiative"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!--            --><?php //endforeach; ?>
<!--        --><?php //endif; ?>
<!---->
<!--        <div class="clearfix"></div>-->
<!--    </div>-->
<!--</div>-->

<?php
$style = '';
$about_section_background = get_field('about_section_background', 'option');
if(strlen($about_section_background['url']) > 0)
{
    $style = "background-image: url('".$about_section_background['url']."');";
}
?>
<div class="about-outer-container" style="<?php echo $style; ?>">
    <div class="container">
        <div class="about-container">
            <?php
            $about_section = get_field('about_section', 'option');
            ?>
            <?php if(strlen($about_section) > 0): ?>
                <?php echo $about_section; ?>
            <?php endif; ?>

        </div>
    </div>
</div>