<?php echo get_header(); ?>



<!-- BODY AREA  -->
<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <!-- SHOW LETEST POST HERE  -->
        <div class="letest_post">
          <?php dynamic_sidebar('home-1') ?>
        </div>
        <h2 class="wp-block-heading">All Post</h2>
        <?php get_template_part('template/blog-templete') ?>
      </div>
      <div class="col-md-3 main_sidebar">
        <div class="sidebar">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER  -->
<?php echo get_footer(); ?>