<?php //dynamic_sidebar('sidebar-primary'); ?>

<div class="sidebar-page hidden">
    <?php
    if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav side-menu']);
    endif;
    ?>
    <div class="container-form">
        <label class="stay-inform" for="">Stay Informed</label>
        <div class="ngp-form" data-id="-1810220557551858944"></div>
    </div>
</div>
