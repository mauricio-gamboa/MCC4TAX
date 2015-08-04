<?php $client_reviews = get_my_post_type('client_review', -1); ?>
  
<?php if($client_reviews): ?>  
<div class="testimonials-slider owl-carousel" owl-single-nav>
  
  <?php foreach ( $client_reviews as $key=>$post ) : setup_postdata( $post ); ?>
  <div class="testimonial">
    <div class="review-content"><?php the_content(); ?></div>

    <?php if(get_field('client_name') && get_field('client_company')): ?>
    <p><strong><a href="<?php the_field('client_company'); ?>" target="_blank"><?php the_field('client_name'); ?></a></strong></p>
    <?php endif; ?>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
  
</div>
<?php endif; ?>