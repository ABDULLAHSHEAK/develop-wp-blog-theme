<?php

// SHOWING CUSTOM POST TYPE SERVIE 
get_header(); ?>

<div class="service_area">
   <div class="container">
      <div class="row">
         <?php
         query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged=' .
            get_query_var('post'));
         if (have_posts()):
            while (have_posts()): the_post();
         ?>
               <div class="col-md-4">
                  <div class="chile-service">
                     <a href="<?php the_permalink()?>">
                        <h2><?php the_title(); ?></h2>
                     </a>
                     <?php the_post_thumbnail('service') ?>
                     <p><?php the_excerpt(); ?></p>
                  </div>
               </div>
         <?php
            endwhile;
         endif;
         ?>
      </div>
   </div>
</div>
<?php get_footer(); ?>