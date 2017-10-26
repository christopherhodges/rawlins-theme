<?php

function rawlins_image_size_setup(){

	// Add custom image sizes.
	//add_image_size('header-background', 960, 391, true);

}
add_action( 'after_setup_theme', 'rawlins_image_size_setup' );


// Give human-readable names the image sizes.
function rawlins_custom_size_names( $sizes ) {
	return array_merge( $sizes, array(
		//'header-background' => 'Header Background',
	) );
}
//add_filter( 'image_size_names_choose', 'rawlins_custom_size_names' );
