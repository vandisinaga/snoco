<?php
$style = '';
$home_page_background = get_field('home_page_background');
if(strlen($home_page_background['url']) > 0)
{
    $style = "background-image: url('".$home_page_background['url']."');";
}
?>
<div class="home-page-background" style="<?php echo $style; ?>">

    <?php if (is_page('advance-care-planning') ||($post->post_parent == 85)): ?>
    <?php
    $initiative_buttons_middle_image = get_field('initiative_buttons_middle_image', 'option');
    ?>
    <div class="border-triangle">
        <img src="<?php echo $initiative_buttons_middle_image['url']?>" alt="<?php echo $initiative_buttons_middle_image['title']?>">
    </div>

    <div class="container">
        <div class="home-page-background-caption">
            <p>Advace Care Planning</p>
        </div>

    <?php elseif (is_page('gear-up-go') || ($post->post_parent == 87)): ?>
        <?php
        $initiative_buttons_right_image = get_field('initiative_buttons_right_image', 'option');
        ?>
        <div class="border-triangle">
            <img src="<?php echo $initiative_buttons_right_image['url']?>" alt="<?php echo $initiative_buttons_right_image['title']?>">
        </div>
        <div class="home-page-background-caption">
            <p>Gear Up and Go!</p>
        </div>

    <?php elseif (is_page('live-healthy-2020') || ($post->post_parent == 89)): ?>
        <?php
        $initiative_buttons_left_image = get_field('initiative_buttons_left_image', 'option');
        ?>
        <div class="border-triangle">
            <img src="<?php echo $initiative_buttons_left_image['url']?>" alt="<?php echo $initiative_buttons_left_image['title']?>">
        </div>
        <div class="home-page-background-caption">
            <p>Live Healthy 2020</p>
        </div>
    <?php endif; ?>
    <?php
    $donate_us = get_field('donate_us');
    ?>
    <a href="<?php echo $donate_us ?>" class="btn btn-donate">Donate <span>Here</span></a>
    <div class="clearfix"></div>
    </div>

</div>


