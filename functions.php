<?php
/**
 * Register `team` post type
 */

//enable featured images

add_theme_support( 'post-thumbnails' );


function team_post_type() {
   
   // Labels
	$labels = array(
		'name' => _x("Team", "post type general name"),
		'singular_name' => _x("Team", "post type singular name"),
		'menu_name' => 'Team Profiles',
		'add_new' => _x("Add New", "team item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);
	
	// Register post type
	register_post_type('team' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-groups',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}

add_action( 'init', 'team_post_type', 0 );

/**
 * Register `department` taxonomy
 */
function team_taxonomy() {
	
	// Labels
	$singular = 'Department';
	$plural = 'Departments';
	$labels = array(
		'name' => _x( $plural, "taxonomy general name"),
		'singular_name' => _x( $singular, "taxonomy singular name"),
		'search_items' =>  __("Search $singular"),
		'all_items' => __("All $singular"),
		'parent_item' => __("Parent $singular"),
		'parent_item_colon' => __("Parent $singular:"),
		'edit_item' => __("Edit $singular"),
		'update_item' => __("Update $singular"),
		'add_new_item' => __("Add New $singular"),
		'new_item_name' => __("New $singular Name"),
	);

	// Register and attach to 'team' post type
	register_taxonomy( strtolower($singular), 'team', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => false,
		'labels' => $labels
	) );
}
add_action( 'init', 'team_taxonomy', 0 );



  // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',  'husb' ),
		'general'  => __( 'General Menu', 'husb' ),
		'departments'  => __( 'Department Menu', 'husb' ),
		'majors'  => __( 'Majors Menu', 'husb' ),
		'sutudent_affairs'  => __( 'Student Affairs Menu', 'husb' ),
		'about_us_main'  => __( 'About Us Main Menu', 'husb' ),
		'about_us_sub'  => __( 'About Us Page Menu', 'husb' ),
		'undergrad_main'  => __( 'Undergraduate Main Menu', 'husb' ),
		'graduate_main'  => __( 'Graduate Main Menu', 'husb' ),
		'student_affairs_main'  => __( 'Student Affair Main Menu', 'husb' ),
        'student_affairs_side'  => __( 'Student Affair Side Menu', 'husb' ),
		'inside_main'  => __( 'Inside HUSB Main Menu', 'husb' ),
		'footer_programs'  => __( 'Programs Footer', 'husb' ),
		'footer_fr'  => __( 'Faculty Research Footer', 'husb' ),
		'footer_info'  => __( 'Info for Footer', 'husb' ),
	) );


// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
return 25;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );


?>