<?php $client_reviews = get_my_post_type('client_review', -1); ?>

<section id="reviews-wrapper" class="site-padding gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <?php if($client_reviews): ?>
        <div id="client-reviews" class="gray-border-1">
          <h2 class="site-subtitle">Client reviews</h2>

          
          <div class="reviews-slider owl-carousel" owl-single-nav>
            <?php foreach ( $client_reviews as $key=>$post ) : setup_postdata( $post ); ?>
            <div class="review-slide">
              <?php the_content(); ?>

              <?php if(get_field('client_name') && get_field('client_company')): ?>
              <p><strong><?php the_field('client_name'); ?></strong> from <strong><?php the_field('client_company'); ?></strong></p>
              <?php endif; ?>

              <p><img src="<?php bloginfo('template_directory'); ?>/public/images/rating.png" alt=""/></p>

              <p><?php the_post_thumbnail(); ?></p>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
        </div>
        <?php endif; ?>

        <?php get_template_part('template_parts/content', 'badges'); ?>
        
        <div class="facebook-plugin">
          <img src="<?php bloginfo('template_directory'); ?>/public/images/facebook-like.jpg" alt=""/>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <?php get_template_part('template_parts/content', 'form'); ?>
      </div>
    </div>
  </div>
</section>