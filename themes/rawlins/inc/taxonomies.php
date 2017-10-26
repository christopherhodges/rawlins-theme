<?php

// create two taxonomies, genres and writers for the post type "book"
function rawlins_registers_taxonomies() {

    $rawlins_magic_taxonomy_maker_array = array(
		/*
        // Issues go for pretty much every post type
        array(
            'tax_singular' => 'Issue',
            'tax_plural'   => 'Issues',
            'tax_slug'     => 'issue', // lowercase letters and dashes only
            'applicable_post_types' => array(
                'resource',
                'press-release',
                'expert',
                'staff',
                'job',
                'board',
                'leadership',
                'leadership-advisory-committee',
                'success-story',
                'financial-statement',
            )
        ),
		*/
    );

    foreach( $rawlins_magic_taxonomy_maker_array as $taxonomy ){
        $tax_singular = $taxonomy['tax_singular'];
        $tax_plural   = $taxonomy['tax_plural'];
        $tax_slug     = $taxonomy['tax_slug'];
        $applicable_post_types = $taxonomy['applicable_post_types'];

        $labels = rawlins_generate_tax_labels_array($tax_singular, $tax_plural);
        $args = rawlins_generate_tax_args_array($labels, $tax_slug);
        register_taxonomy( $tax_slug, $applicable_post_types, $args );
    }

}
add_action( 'init', 'rawlins_registers_taxonomies', 0 ); // hook into the init action



function rawlins_generate_tax_labels_array($tax_singular, $tax_plural){
    $labels = array(
        'name'              => __( $tax_plural ),
        'singular_name'     => __( $tax_singular ),
        'search_items'      => __( 'Search '.$tax_plural ),
        'all_items'         => __( 'All '.$tax_plural ),
        'parent_item'       => __( 'Parent '.$tax_singular ),
        'parent_item_colon' => __( 'Parent '.$tax_singular.':' ),
        'edit_item'         => __( 'Edit '.$tax_singular ),
        'update_item'       => __( 'Update '.$tax_singular ),
        'add_new_item'      => __( 'Add New '.$tax_singular ),
        'new_item_name'     => __( 'New '.$tax_singular.' Name' ),
        'menu_name'         => __( $tax_plural ),
    );
    return $labels;
}

function rawlins_generate_tax_args_array($labels, $tax_slug){
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => $tax_slug ),
    );
    return $args;
}
