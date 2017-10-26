<?php
### jQuery, Condiitonizr, and Modernizr are loaded in the <head>.
### Everything else should load at the end of the page, use TRUE for the 5th parameter of wp_register_script().
function rawlins_scripts(){
	if (!is_admin()) {
	### Core
		// Deregister WordPress jQuery and register Google's
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false);

		// Conditionizr
		//wp_enqueue_script('conditionizr', JSDIR.'/conditionizr.min.js', array(), '2.1.1', false);

		// Modernizr
		//wp_enqueue_script('modernizr', JSDIR.'/modernizr.custom.2.8.1.js', array(), '2.8.1', false);

		// Bootstrap
		wp_enqueue_script('bootstrap__scripts', STYLEDIR.'/bootstrap/javascripts/bootstrap.min.js', array('jquery'), '1.0', true);

		// Main Stylsheet
		wp_enqueue_style('css', STYLEDIR.'/style.css', false, '1.0');

		// Main Scripts (this file is concatenated from the files inside of js/development/ )
		wp_enqueue_script('scripts', JSDIR.'/scripts.min.js', array('jquery'), '1.0', true);



	### Modules
		// moduleName
		// wp_register_script('template-default-js', MODDIR.'moduleName/js/moduleName.js', array('jquery'), '1.0', true);



	### Templates
		// Template Name
		// wp_register_script('template-default-js', JSDIR.'/template-default.js', array('jquery'), '1.0', true);



	}
}
add_action('wp_enqueue_scripts','rawlins_scripts');







### Admin area stuff
function rawlins_admin_theme_style() {
	// CSS for admin
    wp_enqueue_style('admin-theme', STYLEDIR.'/css/admin/style-admin.min.css');
}
add_action('admin_enqueue_scripts', 'rawlins_admin_theme_style');

### Login screen stuff
function rawlins_login_stylesheet() {
	// CSS for login screen
	wp_enqueue_style('login-theme', STYLEDIR.'/css/admin/style-login.min.css');
}
add_action( 'login_enqueue_scripts', 'rawlins_login_stylesheet' );

### Post content editor (TinyMCE)
function rawlins_tinymce_style() {
	// CSS for admin
    add_editor_style( STYLEDIR.'/css/admin/style-tinymce.min.css' );
}
add_action('admin_init', 'rawlins_tinymce_style');
