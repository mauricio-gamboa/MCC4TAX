<header id="header-about" class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-about">

          <?php if(ot_get_option('about_title')): ?>
          <h2><?php echo ot_get_option('about_title'); ?></h2>
          <?php endif; ?>

          <?php if(ot_get_option('about_text')): ?>
          <h3><?php echo ot_get_option('about_text'); ?></h3>
          <?php endif; ?>
          
          <?php if(ot_get_option('about_image')): ?>
          <img class="lawyer-img" src="<?php echo ot_get_option('about_image'); ?>" alt=""/>
          <?php endif; ?>
          
          <img src="<?php bloginfo('template_directory'); ?>/public/images/bg-lines.png" alt="" class="lines"/>
        </div>
      </div>
    </div>
  </div>
</header>