<section id="overview" class="site-padding white-bg">
  <div class="container">
    <div class="row">
      
      <?php if(ot_get_option('over_view_title') && ot_get_option('overview_text')): ?>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <header>
          <h2 class="site-title"><?php echo ot_get_option('over_view_title');?></h2>

          <p class="lead"><?php echo ot_get_option('overview_text');?></p>
        </header>
      </div>
      <?php endif; ?>
      
      <?php if(ot_get_option('overview_what')): ?>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hide-xs">
        <div class="overview-item">
          <?php echo ot_get_option('overview_what');?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if(ot_get_option('overview_what_we_do')): ?>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hide-xs">
        <div class="overview-item">
          <?php echo ot_get_option('overview_what_we_do');?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if(ot_get_option('overview_how_we_do_it')): ?>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hide-xs">
        <div class="overview-item">
          <?php echo ot_get_option('overview_how_we_do_it');?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if(ot_get_option('overview_trust_us')): ?>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hide-xs show-s">
        <div class="overview-item">
          <?php echo ot_get_option('overview_trust_us');?>
        </div>
      </div>
      <?php endif; ?>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 show-xs">
        <div class="overview-slider owl-carousel" owl-single-nav>
          
          <?php if(ot_get_option('overview_what')): ?>
          <div class="overview-item">
            <?php echo ot_get_option('overview_what');?>
          </div>
          <?php endif; ?>

          <?php if(ot_get_option('overview_what_we_do')): ?>
          <div class="overview-item">
            <?php echo ot_get_option('overview_what_we_do');?>
          </div>
          <?php endif; ?>

          <?php if(ot_get_option('overview_how_we_do_it')): ?>
          <div class="overview-item">
            <?php echo ot_get_option('overview_how_we_do_it');?>
          </div>
          <?php endif; ?>

          <?php if(ot_get_option('overview_trust_us')): ?>
          <div class="overview-item">
            <?php echo ot_get_option('overview_trust_us');?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>