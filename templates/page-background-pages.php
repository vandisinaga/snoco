<?php
$style = '';
$home_page_background = get_field('home_page_background');
if(strlen($home_page_background['url']) > 0)
{
    $style = "background-image: url('".$home_page_background['url']."');";
}
?>
<div class="home-page-background" style="<?php echo $style; ?>">
    <div class="container">
        <div class="home-page-background-caption">
            <?php
            $home_page_background_caption = get_field('home_page_background_caption');
            ?>
            <?php if(strlen($home_page_background_caption) > 0): ?>
                <?php echo $home_page_background_caption; ?>
            <?php endif; ?>
        </div>
        <a href="" class=" btn-donate"></a>
        <div class="clearfix"></div>
    </div>
</div>

