<?php
// Errors
ini_set('display_startup_errors',1); ini_set('display_errors',1); error_reporting(-1);



// Yo include your functions so they can be reused!
// If the function is part of a module, include it here too!
include 'inc/globals.php';
include 'inc/wp-reset.php';
include 'inc/database.php';
include 'inc/rawlins_module.php';
include 'inc/post-types.php';
include 'inc/taxonomies.php';
include 'inc/walkers.php';
include 'inc/enqueue.php';
include 'inc/image-sizes.php';
include 'inc/shortcodes.php';
include 'inc/excerpt.php';
include 'inc/navigation.php';
include 'inc/options.php';
include 'inc/widgets.php';
include 'inc/tinyMCE/tinymce.styles.php';

// Modules
//include 'modules/animateCss/animateCss.php';

$module_paths = glob( TEMPLATEPATH . '/modules/*', GLOB_ONLYDIR );
	foreach( $module_paths as $module_path ){
	    $module_name = basename( $module_path );
	    $file_name = rawlins_get_stylesheet_path().'/modules/'.$module_name.'/'.$module_name.'.php';

	    if( file_exists($file_name) ){
		    include $file_name;
		}

	}
