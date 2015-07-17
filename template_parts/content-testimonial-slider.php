<?php $client_reviews = get_my_post_type('client_review', -1); ?>
  
<?php if($client_reviews): ?>  
<div class="testimonials-slider owl-carousel" owl-single-nav>
  
  <?php foreach ( $client_reviews as $key=>$post ) : setup_postdata( $post ); ?>
  <div class="testimonial">
    <?php the_content(); ?>

    <?php if(get_field('client_name') && get_field('client_company')): ?>
    <p><strong><?php the_field('client_name'); ?></strong> from <strong><?php the_field('client_company'); ?></strong></p>
    <?php endif; ?>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
  
</div>
<?php endif; ?>