<?php $locations = get_my_post_type('location', -1); ?>

<aside class="sidebar">
  <h4>over 30 years of experience</h4>

  <?php foreach ( $locations as $key=>$post ) : setup_postdata( $post ); ?>
  <div class="widget location">
    <div>
      <?php get_template_part('template_parts/content', 'location'); ?>
      <a class="my-link link-1" href="">Office Details <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
</aside>

<div class="testimonials">
  <h4><span><i class="fa fa-quote-left"></i></span> testimonials</h4>
  <?php get_template_part('template_parts/content', 'testimonial-slider'); ?>
</div>