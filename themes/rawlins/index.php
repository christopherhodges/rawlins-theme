<?php
function rawlins_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'rawlins_enqueue_scripts');


get_header();

// Loop
if ( have_posts() ) :

    while ( have_posts() ) : the_post();

		the_title();
		the_content();

    endwhile;

else :

    echo 'Not Found.';

endif;

