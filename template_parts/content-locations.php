<?php $locations = get_my_post_type('location', 2); ?>

<?php if($locations): ?>
<section id="locations" class="site-padding white-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 class="site-title">Locations</h2>
      </div>
      
      <?php foreach ( $locations as $key=>$post ) : setup_postdata( $post ); ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="location clearfix">
          <div><?php the_post_thumbnail( array(170, 170) ); ?></div>
          <div>
            <h4 class="site-subtitle clearfix">
              <?php if(get_field('location_silhouette')): ?>
              <?php $image = get_field('location_silhouette'); ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
              
              <?php the_title(); ?>
              
              <?php if(get_field('location_state')): ?>
              <span><?php the_field('location_state'); ?></span>
              <?php endif; ?>
            </h4>

            <?php if(get_field('location_address')): ?>
            <address>
              <span class="marker-icon"><i class="fa fa-map-marker"></i></span>
              <?php the_field('location_address'); ?>
            </address>
            <?php endif; ?>

            <?php if(get_field('location_phone')): ?>
            <p class="phone"><span><i class="fa fa-phone"></i></span> <?php the_field('location_phone'); ?></p>
            <?php endif; ?>
            
            <a class="my-btn btn-1" href="<?php the_permalink(); ?>">Office Details <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>

    </div>
  </div>
</section>
<?php endif; ?>