<?php
$banner = get_field('initiative_buttons', 'option');
?>
<?php get_template_part('templates/initiative-button'); ?>
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