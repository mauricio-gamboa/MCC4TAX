<?php $images = explode( ',', ot_get_option( 'logos', '' ) ); ?>
<?php $columns = count($images); ?>
<?php $width = 100 / $columns; ?>

<section id="as-seen-on" class="site-padding-bottom">
  <div class="container">
    <h2 class="site-title">As seen on</h2>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="aso-wrapper clearfix">
          <?php foreach( $images as $id ): if ( ! empty( $id ) ): ?>
          <?php $full_img_src = wp_get_attachment_image_src( $id, '' ); ?>
          <div class="aso" style="width: <?php echo $width; ?>%;"><img src="<?php echo $full_img_src[0];?>" alt=""/></div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>