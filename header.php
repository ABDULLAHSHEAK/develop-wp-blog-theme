<?php
/*
* This template for displaying the header 
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
   <meta charset="<?php bloginfo('charset') ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <header id="header_area">
      <div class="container">
         <div class="row align-items-center <?php echo get_theme_mod('mas_menu_option'); ?>">
            <div class="col-md-3">
               <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_theme_mod('mas_logo'); ?>" alt=""></a>
            </div>
            <div class="col-md-9">
               <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
            </div>
         </div>
      </div>
   </header>