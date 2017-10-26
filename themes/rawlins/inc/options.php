<?php

// Options Pages
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('General');
	acf_add_options_page('Homepage');

	/* Example for adding in a child options page
	// Success Stories Options
	acf_add_options_page(
		array(
			'page_title' => 'Success Stories Intro Text and Options',
			'parent_slug' => 'edit.php?post_type=success-story'
		)
	);
	*/

}
