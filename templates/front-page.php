<div class="slider-container">

</div>

<?php
$banner = get_field('banner', 'option');
?>

<div class="banner-ounter-container">
    <div class="container-fluid">
        <?php if($banner): ?>
            <?php $i=0; foreach($banner as $list): ?>
                <?php
                $image = $list['banner_image'];

                $image_source = '';
                $image_title = '';

                if(strlen($image['url']) > 0)
                {
                    $image_source = $image['url'];
                    $image_title = $image['title'];
                }

                $title = $list['banner_title'];
                ?>

                <?php if(strlen($title) > 0): ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="banner-content">
                                <h1 class="banner-title"><?php echo $title ?></h1>
                                <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="banner-background"/>
                                <a href="<?php the_permalink(); ?>"> > </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        <?php endif; ?>

        <div class="clearfix"></div>
    </div>
</div>

<div class="about-outer-container">
    <div class="container-fluid">
        <div class="about-container">
            <h1>About SLHC</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam illum, ipsam laudantium magni molestiae, nesciunt nisi nobis omnis ratione sint sunt tempora vitae?</p>
        </div>
    </div>
</div>