<!-- ----- FOOTER SECTION ------  -->
<footer id="footer_area">
   <section id="main_footer">
      <div class="container py-5">
         <div class="row">
            <div class="col-md-4">
               <?php dynamic_sidebar('footer-1') ?>
            </div>
            <div class="col-md-4">
               <?php dynamic_sidebar('footer-2') ?>
            </div>
            <div class="col-md-4">
               <?php dynamic_sidebar('footer-3') ?>
            </div>
         </div>
      </div>
   </section>
   <section id="copyright_area">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p><?php echo get_theme_mod('mas_copyright_setting'); ?>
                  <a href="">- Develop by MAS-IT-ACADEMY</a>
               </p>
            </div>
         </div>
      </div>
   </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>