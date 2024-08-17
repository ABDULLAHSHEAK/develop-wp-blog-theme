<?php
/*
* My Theme Function  
*/

// Theme Title 
include_once('inc/default.php');

// THEME CSS AND JS FILE ENQUEUE 
include_once('inc/enqueue.php');

// THEME FUNCTION 
include_once('inc/theme_function.php');


// Menu Register 
register_nav_menu('main_menu', __('Main Menu', 'masitacademy'));

//Widget Register 
include_once('inc/widget_register.php');
