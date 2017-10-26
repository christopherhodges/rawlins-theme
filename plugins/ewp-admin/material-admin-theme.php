<?php

/*
Plugin Name: EvolutionWP Pro Admin
Plugin URI: https://evolutionwp.io
Description: Premium WordPress admin theme with custom functionality for Business Pro and Business Ultimate managed WordPress hosting
Author: EvolutionWP
Version: 0.5b
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


/****************
Add Styles
**/

function material_style() {
  wp_enqueue_style('material-theme', plugins_url('assets/material.css', __FILE__));
  wp_enqueue_style('material-theme', plugins_url('css/ewp-override.css', __FILE__));
  wp_enqueue_style('material-raleway', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700');
}

  add_action('admin_enqueue_scripts', 'material_style');
  add_action('login_enqueue_scripts', 'material_style');

function my_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('cleanscreen-login.css  ', __FILE__). '">';
}

  add_action('login_head', 'my_login_css');

/****************
Modify Footer Admin and add Intercom Script
**/

/* UNCOMMENT FOR EWP CUSTOMERS

function remove_footer_admin () {
  echo '

    <script type="text/javascript">
      window.intercomSettings = {
      app_id: "q5kepfqn",
      name: "Full Name",
      email: "email@email.com",
      company: "Company Name",
      user_id: "CustomerID",
      created_at: 1312182000 // Signup date as a Unix timestamp
      };
    </script>

    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic(\'reattach_activator\');ic(\'update\',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement(\'script\');s.type=\'text/javascript\';s.async=true;s.src=\'https://widget.intercom.io/widget/q5kepfqn\';var x=d.getElementsByTagName(\'script\')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent(\'onload\',l);}else{w.addEventListener(\'load\',l,false);}}})()</script>

  ';
}



 add_filter('admin_footer_text', 'remove_footer_admin');
*/
/****************
Remove Standard WordPress Dashboard Widgets
**/

function remove_dashboard_widgets() {
  global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
}

  add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

/****************
Add Custom Dashboard Widgets
**/

/* UNCOMMENT TO ACTIVATE CUSTOM DASHBOARD WIDGET

function example_add_dashboard_widgets() {
	wp_add_dashboard_widget(
                 'example_dashboard_widget',         // Widget slug.
                 'Website Management Shortcuts',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );
}
  add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

function example_dashboard_widget_function() {

/****************
Add Website Shortcut Widget
**/

/*  UNCOMMENT TO ACTIVATE CUSTOM DASHBOARD WIDGET

	echo "

    <br />
    <div class='fnquick'>
    <img src='/wp-content/uploads/2016/04/zbb.png' style='width: 30%!important;'>
    </div>

    <br />
    <div class='fnquick'>
    <a class='button button-secondary fnab' href='#' onclick=\"Intercom('showNewMessage')\">Open Support Chat</a>
    </div>
    <div class='fnquick'>
    <a class='button button-secondary fnab' href='https://app.evolutionwp.io/clientarea.php' target='_blank'>Login to EvolutionWP</a>
    </div>
    <br />

  ";
}

/****************
Get Rid of WordPress Howdy
**/

function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Logged in as', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
  add_filter( 'admin_bar_menu', 'replace_howdy',25 );

?>
