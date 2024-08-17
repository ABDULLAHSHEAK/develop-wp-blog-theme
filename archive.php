<?php echo get_header(); ?>

<!-- BODY AREA  -->
<section id="body_area">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div id="archive_title">
               <?php

               the_archive_title(' <h2 class= "wp-block-heading py-3" style=" font-size: 25px !important;
    font-weight: 600;" >', '<h2/>');
               ?>
            </div>
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