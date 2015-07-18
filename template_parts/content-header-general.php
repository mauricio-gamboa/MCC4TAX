<?php while ( have_posts() ) : the_post(); ?>
<header id="header-blog" class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-blog">
          <?php the_title('<h1>', '</h1>');?> 
          <img class="lines" alt="" src="<?php bloginfo('template_directory'); ?>/public/images/bg-lines.png">
        </div>
      </div>
    </div>
  </div>
</header>
<?php endwhile; ?>