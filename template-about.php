<?php
/**
 * Template Name: About Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php
$steering_committee_content = get_field('steering_committee_content');
?>

  <div class="about-container-content">
    <?php echo $steering_committee_content ?>
  </div>

  <div class="about-committee-members">
  <?php
  $steering_committee_content = get_field('steering_committee_content');
  $committee_members = get_field('committee_members');
  if($committee_members):
    $i=0;
    foreach($committee_members as $list):
    $image = $list['image'];

    $image_source = '';
    $image_title = '';

    if(strlen($image['url']) > 0)
    {
      $image_source = $image['url'];
      $image_title = $image['title'];
    }

    $name = $list['name'];
    $job_title = $list['job_title'];
    $location = $list['location'];
    $location_website = $list['location_website'];
    $description = $list['description'];
  ?>

      <div class="col-md-4 col-sm-4 col-xs-12 commitee-members-outers">
        <div class="row">
          <div class="commitee-members">
            <div class="committee-member-image">
              <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
            </div>
            <div class="committee-member-description">
              <div class="committee-member-name">
                <?php echo $name ?>
              </div>
              <div class="committee-member-job-title">
                <?php echo $job_title ?>
              </div>
              <div class="committee-member-company">
                <?php echo $location ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php if($i++ == 2): ?>
    <div class="clearfix"></div>
    <?php endif ?>
<?php endforeach; ?>
    <div class="clearfix"></div>
</div>
<?php endif; ?>

<?php get_template_part('templates/initiative-button'); ?>


