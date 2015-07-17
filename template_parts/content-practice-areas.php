<?php $practice_areas = get_my_post_type('practice_area', 2); ?>

<?php $max = sizeof($practice_areas) - 1; ?>

<?php if($practice_areas): ?>
<section id="practice-areas" class="site-padding white-bg">
  <div class="container">
    <h2 class="site-title">Practice Areas</h2>

    <div class="row">
      
      <?php foreach ( $practice_areas as $key=>$post ) : setup_postdata( $post ); ?>
      <?php $klass = ($max == $key) ? 'practice last' : 'practice'; ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="<?php echo $klass; ?>">
          <?php the_post_thumbnail( array(82, 82) ); ?>
          <?php the_title('<h4 class="site-other-sub-title">', '</h4>'); ?>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="my-btn btn-1">learn more <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    
    </div>
  </div>
</section>
<?php endif; ?>