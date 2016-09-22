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


                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 initiative-buttons-box content-live-healthy">
                    <div class="row">
                        <div class="initiative-buttons-content">
                            <?php
                            $initiative_buttons_left_image = get_field('initiative_buttons_left_image', 'option');
                            $initiative_buttons_left_title = get_field('initiative_buttons_left_title', 'option');
                            $initiative_buttons_left_url = get_field('initiative_buttons_left_url', 'option');
                            ?>
                            <h1 class="initiative_buttons_title">
                                <?php if(strlen($initiative_buttons_left_title) > 0): ?>
                                    <?php echo $initiative_buttons_left_title; ?>
                                <?php endif; ?>
                            </h1>
                            <div class="initiative-buttons-content-inner">
                                <a href="<?php echo $initiative_buttons_left_url?>">
                                    <img src="<?php echo $initiative_buttons_left_image['url']?>" alt="<?php echo $initiative_buttons_left_image['title']?>" class="img-responsive"/>
                                </a>
                                <div class="initiative-button">
                                    <a href="<?php echo $initiative_buttons_left_url?>" class="btn btn-initiative"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 initiative-buttons-box content-acp">
                        <div class="row">
                            <div class="initiative-buttons-content">
                                <?php
                                $initiative_buttons_middle_image = get_field('initiative_buttons_middle_image', 'option');
                                $initiative_buttons_middle_title = get_field('initiative_buttons_middle_title', 'option');
                                $initiative_buttons_middle_url = get_field('initiative_buttons_middle_url', 'option');
                                ?>
                                <h1 class="initiative_buttons_title">
                                    <?php if(strlen($initiative_buttons_middle_title) > 0): ?>
                                        <?php echo $initiative_buttons_middle_title; ?>
                                    <?php endif; ?>
                                </h1>
                                <div class="initiative-buttons-content-inner">
                                    <a href="<?php echo $initiative_buttons_middle_url?>">
                                        <img src="<?php echo $initiative_buttons_middle_image['url']?>" alt="<?php echo $initiative_buttons_middle_image['title']?>" class="img-responsive"/>
                                    </a>
                                    <div class="initiative-button">
                                        <a href="<?php echo $initiative_buttons_middle_url?>" class="btn btn-initiative"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 initiative-buttons-box content-gugo">
                        <div class="row">
                            <div class="initiative-buttons-content">
                                <?php
                                $initiative_buttons_right_image = get_field('initiative_buttons_right_image', 'option');
                                $initiative_buttons_right_title = get_field('initiative_buttons_right_title', 'option');
                                $initiative_buttons_right_url = get_field('initiative_buttons_right_url', 'option');
                                ?>
                                <h1 class="initiative_buttons_title">
                                    <?php
                                    ?>
                                    <?php if(strlen($initiative_buttons_right_title) > 0): ?>
                                        <?php echo $initiative_buttons_right_title; ?>
                                    <?php endif; ?>
                                </h1>
                                <div class="initiative-buttons-content-inner">
                                    <a href="<?php echo $initiative_buttons_right_url?>">
                                        <img src="<?php echo $initiative_buttons_right_image['url']?>" alt="<?php echo $initiative_buttons_right_image['title']?>" class="img-responsive"/>
                                    </a>
                                    <div class="initiative-button">
                                        <a href="<?php echo $initiative_buttons_right_url?>" class="btn btn-initiative"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


        </div>
    </div>
</div>
