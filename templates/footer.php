<footer class="">
  <div class="footer-bottom-outer">
    <div class="container">
        <div class="footer-container">
          <div class="footer-title">
            <h1 class="title">
              <?php
              $footer_title = get_field('footer_title', 'option');
              ?>
              <?php if(strlen($footer_title) > 0): ?>
                <?php echo $footer_title; ?>
              <?php endif; ?>
            </h1>
          </div>
          <div class="footer-description">
            <?php
            $footer_description = get_field('footer_description', 'option');
            ?>
            <?php if(strlen($footer_description) > 0): ?>
              <?php echo $footer_description; ?>
            <?php endif; ?>
          </div>
        </div>
    </div>
  </div>


  <div class="container">
    <?php /*dynamic_sidebar('sidebar-footer');*/ ?>
  </div>
</footer>

<!--<footer class="content-info">-->
<!--  <div class="container">-->
<!--    --><?php //dynamic_sidebar('sidebar-footer'); ?>
<!--  </div>-->
<!--</footer>-->
