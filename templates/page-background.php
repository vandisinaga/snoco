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
        <?php
        $donate_us = get_field('donate_button_url', 'option');
        ?>
        <a href="<?php echo $donate_us ?>" class="btn btn-donate">Donate <span>Here</span></a>
        <div class="clearfix"></div>
    </div>
</div>

