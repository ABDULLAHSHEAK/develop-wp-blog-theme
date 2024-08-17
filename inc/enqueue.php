<?php
function mas_css_js_file_calling()
{
   wp_enqueue_style('mas_style', get_stylesheet_uri());
   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3', 'all');
   wp_enqueue_style('bootstrap');
   
   // add custom css file
   wp_register_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
   wp_enqueue_style('custom-css');

   // jquery
   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', 'true');
   wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'mas_css_js_file_calling');

// Google font Enqueue 
function mas_add_fonts(){
   wp_enqueue_style('mas_fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',false);
}
add_action('wp_enqueue_scripts', 'mas_add_fonts');