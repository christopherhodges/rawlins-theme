<?php
// check if the flexible content field has rows of data
if( have_rows('page_builder') ):

 	// loop through the rows of data
    while ( have_rows('page_builder') ) : the_row();

		// check current row layout
		//echo "<pre>"; print_r( get_row_layout() ); echo "</pre>";
        $layout_file = rawlins_get_stylesheet_path().'/modules/flex-content/layouts/'.get_row_layout().'.php';
        if( file_exists($layout_file) ):
            include($layout_file);
        endif;

    endwhile;

else :

    // no layouts found

endif;
