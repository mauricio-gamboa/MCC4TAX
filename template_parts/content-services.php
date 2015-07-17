<?php $services = ot_get_option( 'services_list', array() ); ?>

<?php if ( ! empty( $services ) ): ?>
<section id="lists" class="site-padding gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?php if(ot_get_option('services_text')): ?>
        <p class="lead"><?php echo ot_get_option('services_text');?></p>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <ul class="list-unstyled">
          <?php foreach($services as $service): ?>
          <li><i class="fa fa-check"></i> <?php echo $service['title'];?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>