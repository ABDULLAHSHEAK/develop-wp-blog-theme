<?php 

// Sidebar Widget Register 

function mas_widgets_register(){
   // SIDEBR WIDGETS 
   register_sidebar(array(
      'name' => __('Main Widget Area', 'masitacademy'),
      'id'   => 'sidebar-1',
      'description' => __('Apperas in the sidebar in blog page and also other page','masitacademy'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
   ));

   // FOOTER WIDGETS 1
   register_sidebar(array(
      'name' => __('Footer Widgets 1', 'masitacademy'),
      'id'   => 'footer-1',
      'description' => __('Apperas in the footer in blog page and also other page', 'masitacademy'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
   ));
   // FOOTER WIDGETS 2
   register_sidebar(array(
      'name' => __('Footer Widgets 2', 'masitacademy'),
      'id'   => 'footer-2',
      'description' => __('Apperas in the footer in blog page and also other page', 'masitacademy'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
   ));
   // FOOTER WIDGETS 3
   register_sidebar(array(
      'name' => __('Footer Widgets 3', 'masitacademy'),
      'id'   => 'footer-3',
      'description' => __('Apperas in the footer in blog page and also other page', 'masitacademy'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
   ));
}
add_action('widgets_init', 'mas_widgets_register');