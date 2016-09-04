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

  <div class="outer-container-content">
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
    $a=$i++;
  ?>

      <div class="col-md-4 col-sm-4 col-xs-12 commitee-members-outers">
        <div class="row">
          <div class="commitee-members">
              <div class="committee-member-image" data-toggle="modal" data-target="#modalUser<?php echo $a ?>">
                <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
              </div>
              <div class="committee-member-information">
                  <div class="committee-member-name" data-toggle="modal" data-target="#modalUser<?php echo $a ?>">
                      <h1><?php echo $name ?></h1>
                  </div>
                  <div class="committee-member-job-title">
                      <p><?php echo $job_title ?></p>
                  </div>
                  <div class="committee-member-company">
                      <a href="https://www.google.com/maps/place/<?php echo $location ?>"><?php echo $location ?></a>
                  </div>
              </div>
              <div class="modal fade" id="modalUser<?php echo $a?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header visible-xs">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                              <div class="modal-outer-container">
                                  <div class="modal-member-image">
                                      <img src="<?php echo $image_source ?>" alt="<?php echo $image_title ?>" class="img-responsive"/>
                                  </div>
                                  <div class="modal-member-description">
                                      <h1><?php echo $name ?></h1>
                                      <hr>
                                      <p><?php echo $description ?></p>
                                  </div>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    <?php if($a == 2): ?>
      <div class="clearfix"></div>
    <?php endif ?>
<?php endforeach; ?>
    <div class="clearfix"></div>
</div>
<?php endif; ?>
<?php get_template_part('templates/initiative-button'); ?>




