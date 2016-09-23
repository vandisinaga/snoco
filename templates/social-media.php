<?php
/**
 * Created by PhpStorm.
 * User: upwardstech
 * Date: 8/29/2016
 * Time: 5:12 PM
 */?>

<div class="social-media-container clearfix">
    <div class="social-media">
        <?php
        $facebook = get_field('facebook_url', 'option');
        $twitter = get_field('twitter_url', 'option');
        $linkedin = get_field('linkedin_url', 'option');
        ?>
        <?php if(strlen($linkedin) > 0): ?>
            <a href="<?php echo $linkedin ?>" target="_blank" class="social-media-icon icon-instagram"><i class="fa fa-linkedin"></i></a>
        <?php endif; ?>
        <?php if(strlen($facebook) > 0): ?>
            <a href="<?php echo $facebook ?>" target="_blank" class="social-media-icon icon-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <?php endif; ?>

        <?php if(strlen($twitter) > 0): ?>
            <a href="<?php echo $twitter ?>" target="_blank" class="social-media-icon icon-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <?php endif; ?>
    </div>
</div>
