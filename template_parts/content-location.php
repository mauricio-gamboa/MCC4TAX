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