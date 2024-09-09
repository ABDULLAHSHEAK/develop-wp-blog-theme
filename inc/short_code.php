<?php
// Services Shortcode 
function service_shortcode($atts)
{
   ob_start();
   $query = new WP_Query(array(
      'post_type' => 'service',
      'posts_per_page' => 3,
      'order' => 'ASC',
      'orderby' => 'title',
   ));
   if ($query->have_posts()) { ?>

      <div class="service_area">
   <div class="container">
      <div class="row">
         <?php while($query -> have_posts ()) : $query->the_post();  ?>
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
            wp_reset_postdata(); 
         ?>
      </div>
   </div>
</div>

   <?php $myveriable = ob_get_clean();
      return $myveriable;
   }
}
add_shortcode('service', 'service_shortcode');
