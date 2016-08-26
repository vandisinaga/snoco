<header id="header" class="banner">

  <div class="header-top-outer hidden-xs">
    <div class="container-fluid">
      <div class="header-top-container">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="row">
            <div class="header-logo">

              <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $logo = get_field('logo_image', 'option');
                if(strlen($logo['url'])):
                  ?>
                  <img src="<?php echo $logo['url'] ?>" alt="<?php bloginfo('name'); ?>" class="navbar-brand"/>
                <?php else: ?>
                  <?php bloginfo('name'); ?>
                <?php endif; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="header-bottom-outer">
    <div class="container-fluid">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">

          <nav class="navbar nav-primary">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main-menu" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar "></span>
              </button>

              <a class="brand hidden-lg hidden-md hidden-sm visible-xs" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $logo = get_field('logo_image', 'option');
                if(strlen($logo['url'])):
                  ?>
                  <img src="<?php echo $logo['url'] ?>" alt="<?php bloginfo('name'); ?>" class="navbar-brand"/>
                  <span class="clearfix"></span>
                <?php else: ?>
                  <?php bloginfo('name'); ?>
                <?php endif; ?>
              </a>

              <div id="navbar-main-menu" class="collapse navbar-collapse">
                <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav top-menu ']);
                endif;
                ?>
              </div><!--/.nav-collapse -->

            </div>

          </nav>

        </div>
      </div>

    </div>
  </div>
</header>
