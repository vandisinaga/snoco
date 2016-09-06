<?php
/**
 * Created by PhpStorm.
 * User: upwardstech
 * Date: 8/29/2016
 * Time: 5:12 PM
 */?>

<div class="initiative-buttons-ounter-container">
    <div class="container">
        <div class="initiative-buttons-inner-container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 initiative-buttons-box">
                <div class="row">
                    <div class="initiative-buttons-content">
                        <?php
                        $initiative_buttons_left_image = get_field('initiative_buttons_left_image', 'option');
                        ?>
                        <h1 class="initiative_buttons_title">
                            <?php
                            $initiative_buttons_left_title = get_field('initiative_buttons_left_title', 'option');
                            ?>
                            <?php if(strlen($initiative_buttons_left_title) > 0): ?>
                                <?php echo $initiative_buttons_left_title; ?>
                            <?php endif; ?>
                        </h1>
                        <div class="initiative-buttons-content-inner">
                            <img src="<?php echo $initiative_buttons_left_image['url']?>" class="img-responsive"/>
                            <div class="initiative-button">
                                <?php
                                $initiative_buttons_left_url = get_field('initiative_buttons_left_url', 'option');
                                ?>
                                <a href="<?php echo $initiative_buttons_left_url?>" class="btn btn-initiative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 initiative-buttons-box">
                <div class="row">
                    <div class="initiative-buttons-content">
                        <?php
                        $initiative_buttons_middle_image = get_field('initiative_buttons_middle_image', 'option');
                        ?>
                        <h1 class="initiative_buttons_title">
                            <?php
                            $initiative_buttons_middle_title = get_field('initiative_buttons_middle_title', 'option');
                            ?>
                            <?php if(strlen($initiative_buttons_middle_title) > 0): ?>
                                <?php echo $initiative_buttons_middle_title; ?>
                            <?php endif; ?>
                        </h1>
                        <div class="initiative-buttons-content-inner">
                            <img src="<?php echo $initiative_buttons_middle_image['url']?>" class="img-responsive"/>
                            <div class="initiative-button">
                                <?php
                                $initiative_buttons_middle_url = get_field('initiative_buttons_middle_url', 'option');
                                ?>
                                <a href="<?php echo $initiative_buttons_middle_url?>" class="btn btn-initiative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 initiative-buttons-box">
                <div class="row">
                    <div class="initiative-buttons-content">
                        <?php
                        $initiative_buttons_right_image = get_field('initiative_buttons_right_image', 'option');
                        ?>
                        <h1 class="initiative_buttons_title">
                            <?php
                            $initiative_buttons_right_title = get_field('initiative_buttons_right_title', 'option');
                            ?>
                            <?php if(strlen($initiative_buttons_right_title) > 0): ?>
                                <?php echo $initiative_buttons_right_title; ?>
                            <?php endif; ?>
                        </h1>
                        <div class="initiative-buttons-content-inner">
                            <img src="<?php echo $initiative_buttons_right_image['url']?>" class="img-responsive"/>
                            <div class="initiative-button">
                                <?php
                                $initiative_buttons_right_url = get_field('initiative_buttons_right_url', 'option');
                                ?>
                                <a href="<?php echo $initiative_buttons_right_url?>" class="btn btn-initiative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
