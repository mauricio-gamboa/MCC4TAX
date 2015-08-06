<header id="header-home" class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-home">
          
          <?php if(ot_get_option('home_page_subtitle')): ?>
          <h2><?php echo ot_get_option('home_page_subtitle'); ?></h2>
          <?php endif; ?>

          <?php if(ot_get_option('home_page_title')): ?>
          <h1><?php echo ot_get_option('home_page_title'); ?></h1>
          <?php endif; ?>

          <div class="how-much-owe clearfix hide-xs">
            <h5>How much do you owe?</h5>

<!--             <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span> $25,000 - $50,000
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Option</a></li>
                <li><a href="#">Option</a></li>
                <li><a href="#">Option</a></li>
                <li><a href="#">Option</a></li>
              </ul>
            </div> -->

            <a href="#reviews-wrapper" du-smooth-scroll class="my-btn btn-1">Get Started <i class="fa fa-arrow-right"></i></a>
          </div>
          
          <?php if(ot_get_option('lawyer_s_image')): ?>
          <img class="lawyer-img" src="<?php echo ot_get_option('lawyer_s_image'); ?>" alt=""/>
          <?php endif; ?>
          
          <img src="<?php bloginfo('template_directory'); ?>/public/images/bg-lines.png" alt="" class="lines"/>

          <?php if(ot_get_option('phone_number')): ?>
          <div class="button-wrapper show-xs">
            <a href="tel:<?php echo ot_get_option('phone_number') ?>" class="my-btn btn-1">Call Now <i class="fa fa-arrow-right"></i></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>