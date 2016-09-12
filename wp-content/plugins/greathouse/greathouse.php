<?php
/*
Plugin Name: Greathouse
*/

//add_action( 'plugins_loaded', 'greathouse_setup' ); disabled for now

function greathouse_setup() {
	// Fixes 404 on category archive page
	add_filter( 'rewrite_rules_array', function( $rules ) {
	    $new_rules = array(
	        'furniture/([^/]*?)/page/([0-9]{1,})/?$' => 'index.php?product_cat=$matches[1]&paged=$matches[2]',
	        'furniture/([^/]*?)/?$' => 'index.php?product_cat=$matches[1]',
	    );
	    
	    return $new_rules + $rules;
	});
}

/*
	    $new_rules = array(
	        'furniture/(.+?)/page/([0-9]{1,})/?$' => 'index.php?product_cat=$matches[1]&paged=$matches[2]',
	        'furniture/(.+?)/?$' => 'index.php?product_cat=$matches[1]',
	        'furniture/([^/]*?)/page/([0-9]{1,})/?$' => 'index.php?product_cat=$matches[1]&paged=$matches[2]',
	        'furniture/([^/]*?)/?$' => 'index.php?product_cat=$matches[1]',
	    );
*/

// add_filter('template_redirect', 'my_404_override' );
function my_404_override() {
    global $wp_query;
    global $wpdb;

    //if (<some condition is met>) {
    //    status_header( 200 );
    //    $wp_query->is_404=false;
    //}
    echo '<pre>';
    print_r( $wp_query );
    echo '</pre>';
    echo '<pre>';
    print_r( $wpdb );
    echo '</pre>';
    exit();
}
