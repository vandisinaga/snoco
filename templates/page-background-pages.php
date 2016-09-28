<?php
$style = '';
$page_background = get_field('page_background');
$home_page_background = get_field('home_page_background', 'option');
if(strlen($page_background['url']) > 0)
{
    $style = "background-image: url('".$page_background['url']."');";
}
else{
    $style = "background-image: url('".$home_page_background['url']."');";
}
?>

<div class="home-page-background" style="<?php echo $style; ?>">
    <?php if ( is_page_template('template-acp.php' )|| is_page_template('template-acp-news.php' )) {?>
        <?php
            $initiative_buttons_middle_image = get_field('initiative_buttons_middle_image', 'option');
        ?>
        <div class="border-triangle">
            <img src="<?php echo $initiative_buttons_middle_image['url']?>" alt="<?php echo $initiative_buttons_middle_image['title']?>">
        </div>
            <div class="home-page-background-caption">
                <div class="container">
                <p>Advance Care Planning</p>
            </div>

        <?php } elseif( is_page_template('template-gugo.php' )|| is_page_template('template-gugo-news.php' )) {?>
            <?php
            $initiative_buttons_right_image = get_field('initiative_buttons_right_image', 'option');
            ?>
            <div class="border-triangle">
                <img src="<?php echo $initiative_buttons_right_image['url']?>" alt="<?php echo $initiative_buttons_right_image['title']?>">
            </div>
            <div class="home-page-background-caption">
                <div class="container">
                <p>Gear Up and Go!</p>
            </div>

        <?php } elseif( is_page_template('template-live-healty.php' )) {?>
            <?php
            $initiative_buttons_left_image = get_field('initiative_buttons_left_image', 'option');
            ?>
            <div class="border-triangle">
                <img src="<?php echo $initiative_buttons_left_image['url']?>" alt="<?php echo $initiative_buttons_left_image['title']?>">
            </div>
            <div class="home-page-background-caption">
                <div class="container">
                <p>Live Healthy 2020</p>
            </div>
        <?php } else {?>
            <div class="container">
                <div class="home-page-background-caption">
                    <?php
                    $page_background_caption = get_field('page_background_caption');
                    ?>
                    <?php if(strlen($page_background_caption) > 0): ?>
                        <?php echo $page_background_caption; ?>
                    <?php endif; ?>
                </div>
        <?php }?>
    <?php
    $donate_us = get_field('donate_us');
    ?>
    <a href="<?php echo $donate_us ?>" class="btn btn-donate">Donate <span>Here</span></a>
    <div class="clearfix"></div>
    </div>
</div>


