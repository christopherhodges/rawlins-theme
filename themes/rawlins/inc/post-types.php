<?php

function rawlins_register_post_types() {

	// Add all your post type info into this array.
	$rawlins_magic_post_type_maker_array = array(
		/*array(
			'cpt_single' => 'Resource',
			'cpt_plural' => 'Resources',
			'slug' => 'resource',
			'cpt_icon' => 'dashicons-index-card',
			'exclude_from_search' => false,
		),*/

	);

	foreach( $rawlins_magic_post_type_maker_array as $post_type ){
		$cpt_single = $post_type['cpt_single'];
		$cpt_plural = $post_type['cpt_plural'];
		$slug = $post_type['slug'];
		$cpt_icon = $post_type['cpt_icon'];
		$exclude_from_search = $post_type['exclude_from_search'];

		// Admin Labels
	  	$labels = rawlins_generate_label_array($cpt_plural, $cpt_single);

	  	// Arguments
		$args = rawlins_generate_post_type_args($labels, $cpt_plural, $cpt_icon, $exclude_from_search);

		// Just do it
		register_post_type( $slug, $args );
	}

}

// Hook into the 'init' action
add_action( 'init', 'rawlins_register_post_types', 0 );




function rawlins_generate_label_array($cpt_plural, $cpt_single){
	$labels = array(
            'name'               => __( $cpt_plural,                                'spark' ),
            'singular_name'      => __( $cpt_single,                                'spark' ),
            'add_new'            => __( 'Add New '.$cpt_single,                     'spark' ),
            'add_new_item'       => __( 'Add New '.$cpt_single,                     'spark' ),
            'edit_item'          => __( 'Edit '.$cpt_single,                        'spark' ),
            'new_item'           => __( 'New '.$cpt_single,                         'spark' ),
            'all_items'          => __( 'All '.$cpt_plural,                         'spark' ),
            'view_item'          => __( 'View '.$cpt_single.' Page',                'spark' ),
            'search_items'       => __( 'Search '.$cpt_plural,                      'spark' ),
            'not_found'          => __( 'No '.$cpt_plural.' found',                 'spark' ),
            'not_found_in_trash' => __( 'No '.$cpt_plural.' found in the Trash',    'spark' ),
            'parent_item_colon'  => '',
            'menu_name'          => $cpt_plural,
        );

	return $labels;
}

function rawlins_generate_post_type_args($labels, $cpt_plural, $cpt_icon, $exclude_from_search){
	$args = array(
        'labels'        	  => $labels,
        'description'   	  => __('Manage '.$cpt_plural, 'spark'),
        'public'        	  => true,
        'menu_position' 	  => 10,
        'hierarchical'		  => true,
        'supports'      	  => array( 'title', 'editor', 'page-attributes', 'thumbnail', 'excerpt' ),
        'has_archive'   	  => true,
        'menu_icon'			  => $cpt_icon,
        'exclude_from_search' => $exclude_from_search
    );

	return $args;
}
