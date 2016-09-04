<?php
$style = '';
$home_page_background = get_field('home_page_background');
if(strlen($home_page_background['url']) > 0)
{
    $style = "background-image: url('".$home_page_background['url']."');";
}
?>
<div class="home-page-background" style="<?php echo $style; ?>">
    <div class="border-triangle hidden-xs">
        <?php
        $border_triangle_image = get_field('border_triangle_image');
        ?>
        <img src="<?php echo $border_triangle_image['url']?>" alt="">
    </div>
    <div class="container">
        <div class="home-page-background-caption">
            <?php
            $home_page_background_caption = get_field('home_page_background_caption');
            ?>
            <?php if(strlen($home_page_background_caption) > 0): ?>
                <?php echo $home_page_background_caption; ?>
            <?php endif; ?>
        </div>
        <?php
        $donate_us = get_field('donate_us');
        ?>
        <a href="<?php echo $donate_us ?>" class="btn btn-donate">Donate <span>Here</span></a>
        <div class="clearfix"></div>
    </div>
</div>

