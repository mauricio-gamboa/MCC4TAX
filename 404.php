<?php get_header(); ?>

<header id="header-blog" class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-blog">
          <h1>That page can&rsquo;t be found.</h1>
          <img class="lines" alt="" src="<?php bloginfo('template_directory'); ?>/public/images/bg-lines.png">
        </div>
      </div>
    </div>
  </div>
</header>

<section id="content" class="site-padding white-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="content content-about">
          <p>It looks like nothing was found at this location.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'reviews'); ?>

<?php get_footer(); ?>