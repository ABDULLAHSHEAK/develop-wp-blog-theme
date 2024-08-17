<?php
function mas_customize_register($wp_customize)
{
   // MENU POSITION
   $wp_customize->add_section('mas_header_area', array(
      'title' => __('Header Area', 'masitacademy'),
      'description' => 'Update your header area',
   ));

   $wp_customize->add_setting('mas_logo', array(
      'default' => get_bloginfo('template_directory') . '/assets/img/logo.png',
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mas_logo', array(
      'label' => 'Change Logo',
      'description' => 'You can change the logo',
      'section' => 'mas_header_area',
      'settings' => 'mas_logo',
   )));

   // HERO IMAGE CONTROL

   $wp_customize->add_section('mas_hero_area', array(
      'title' => __('Hero Area'),
      'description' => 'You can change hero image here',
   ));

   $wp_customize->add_setting('hero_img', array(
      'default' => get_bloginfo('template_directory') . '/assets/img/hero.webp',
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize,
      'hero_img',
      array(
         'label' => 'Change Hero Image',
         'description' => 'Change the image',
         'section' => 'mas_hero_area',
         'setting' => 'hero_img',
      )
   ));

   // MENU POSITION SECTION
   $wp_customize->add_section('mas_menu_position', array(
      'title' => __('Menu Position', 'masitacademy'),
      'description' => 'Change Menu Position',
   ));

   $wp_customize->add_setting('mas_menu_option', array(
      'default' => 'right_menu',
   ));

   $wp_customize->add_control('mas_menu_option', array(
      'label' => 'Change Menu Position',
      'description' => 'You can change the position of the menu',
      'section' => 'mas_menu_position',
      'setting' => 'mas_menu_option',
      'type' => 'radio',
      'choices' => array(
         'left_menu' => 'Left Menu',
         'right_menu' => 'Right Menu',
         'center_menu' => 'Center Menu',
      )
   ));


   // FOOTER SECTION 
   $wp_customize->add_section('mas_footer_option', array(
      'title'         => __('Footer Option', 'masitacademy'),
      'description'   => 'You can your footer text here',
   ));

   $wp_customize->add_setting('mas_copyright_setting', array(
      'default' => '&copy; Copyright 2024 | MAS-IT-ACADEMY',
   ));

   $wp_customize->add_control('mas_copyright_setting', array(
      'label'         => 'Copyright Text',
      'description'   => 'If needed, you can update copyright information',
      'section'       => 'mas_footer_option',
      'setting'       => 'mas_copyright_setting',
   ));


   // THEME COLOR CHANGE OPTION 
   $wp_customize->add_section('mas_colors', array(
      'title' => __('Theme Color', 'mas_it_academy'),
      'description' => 'If you need you can change theme color',
   ));

   $wp_customize->add_setting('mas_bg_color', array(
      'default' => '#f8f9fa',
   ));

   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mas_bg_color', array(
      'label' => 'Background Color',
      'section' => 'mas_colors',
      'setting' => 'mas_bg_color',

   )));
   // primary color 
   $wp_customize->add_setting('mas_link_color', array(
      'default' => '#ea1a70',
   ));

   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mas_link_color', array(
      'label' => 'Primary Color',
      'section' => 'mas_colors',
      'setting' => 'mas_link_color',

   ))); // end theme color 
}
add_action('customize_register', 'mas_customize_register');

// theme color function 
function mas_theme_color_cus()
{
?>
   <style>
      body {
         background: <?php echo get_theme_mod('mas_bg_color') ?>
      }
      :root {
         --primary: <?php echo get_theme_mod('mas_link_color')?>;
      }
   </style>
<?php
}
add_action('wp_head', 'mas_theme_color_cus');
