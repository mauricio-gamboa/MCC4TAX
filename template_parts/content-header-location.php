<?php $image = get_field('location_background'); ?>

<header id="header-location" class="header location-header" style="background-image: url('<?php echo $image['url']; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-location">
            <?php if(get_field('location_state')) { ?>
              <h1><?php the_title();?>, <?php the_field('location_state'); ?></h1>
            <?php } else {
              the_title('<h1>','</h1>');
            } ?>
          <img class="lines" alt="" src="<?php bloginfo('template_directory'); ?>/public/images/bg-lines.png">
        </div>
      </div>
    </div>
  </div>
</header>