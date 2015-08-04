<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="MCC4TAX">
<head>
  <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1470477823219714";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header id="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="logo hide-xs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

        <h1 class="logo small show-xs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

        <div class="estimate hide-s hide-xs">
          <a href="#reviews-wrapper" du-smooth-scroll class="my-btn btn-1">get a free estimate</a>
        </div>
        
        <?php if(ot_get_option('phone_number') && ot_get_option('phone_number_numbers')): ?>
        <div class="call clearfix hide-m hide-s hide-xs">
          <span class="phone-icon"><i class="fa fa-phone"></i></span>
          <span>
            <span>call free toll</span>
            <br/>
            <span class="phone"> <a href="tel:<?php echo ot_get_option('phone_number_numbers') ?>"><?php echo ot_get_option('phone_number') ?></a></span>
          </span>
        </div>
        <?php endif; ?>
        
        <div class="ratings hide-xs">
          <img src="<?php bloginfo('template_directory'); ?>/public/images/ratings.png" alt=""/>
        </div>
      </div>
    </div>
  </div>
</header>
<nav id="main-menu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="menu-wrapper clearfix">

          <div class="toggler show-xs collapsed" data-toggle="collapse" data-target="#mobile-menu">
            <i class="fa fa-bars"></i>
          </div>
          
          <?php if(ot_get_option('phone_number') && ot_get_option('phone_number_numbers')): ?>
          <a href="tel:<?php echo ot_get_option('phone_number_numbers') ?>" class="my-btn btn-1 show-xs"><i class="fa fa-phone"></i> <?php echo ot_get_option('phone_number') ?></a>
          <?php endif; ?>

          <ul class="list-unstyled main-menu clearfix hide-xs">
            <?php wp_nav_menu(array( 'menu' => 'main-menu', 'container' => false, 'items_wrap' => '%3$s', 'depth' => 2)); ?>
            <li><a href="#reviews-wrapper" du-smooth-scroll>Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
<nav id="mobile-menu" class="collapse">
  <ul class="main-menu-mobile list-unstyled">
    <?php wp_nav_menu(array( 'menu' => 'main-menu', 'container' => false, 'items_wrap' => '%3$s', 'depth' => 1)); ?>
    <li><a href="#contact-form" du-smooth-scroll>Contact Us</a></li>
  </ul>
</nav>