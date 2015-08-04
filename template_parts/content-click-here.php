<div id="click-here">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="click-here-item">
          <h3>schedule an appointment with us</h3>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="click-here-item middle">
          
          <?php if(ot_get_option('phone_number') && ot_get_option('phone_number_numbers')): ?>
          <div class="call clearfix">
            <span class="phone-icon"><i class="fa fa-phone"></i></span>
            <span>
              <span>call free toll</span>
              <br/>
              <span class="phone"> <a href="tel:<?php echo ot_get_option('phone_number_numbers') ?>"><?php echo ot_get_option('phone_number') ?></a></span>
            </span>
          </div>
          <?php endif; ?>

        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 no-bg hide-xs">
        <div class="click-here-item">
          <div class="call clearfix">
            <span class="phone-icon"><i class="fa fa-envelope"></i></span>
            <span><span>send a message</span><br/><span class="phone"><a href="#reviews-wrapper" du-smooth-scroll>Contact Us</a></span></span>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 no-bg show-xs">
        <div class="click-here-item">
          <div class="call clearfix">
            <span class="phone-icon"><i class="fa fa-envelope"></i></span>
            <span><span>send a message</span><br/><span class="phone"><a href="#reviews-wrapper" du-smooth-scroll>Contact Us</a></span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>