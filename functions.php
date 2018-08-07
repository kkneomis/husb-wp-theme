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
		'rewrite'  => array( 'slug' => 'faculty/?team='),
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}

add_action( 'init', 'team_post_type', 0 );



/**
 * Conditionally Override Yoast SEO Breadcrumb Trail
 * http://plugins.svn.wordpress.org/wordpress-seo/trunk/frontend/class-breadcrumbs.php
 * -----------------------------------------------------------------------------------
 */

add_filter( 'wpseo_breadcrumb_links', 'wpse_100012_override_yoast_breadcrumb_trail' );

function wpse_100012_override_yoast_breadcrumb_trail( $links ) {
    global $post;

    if ( is_home() || is_singular( 'team' ) || is_archive() ) {
        $breadcrumb[] = array(
            'url' => get_permalink( get_page_by_title( 'Faculty' )),
            'text' => ' Faculty',
        );

        array_splice( $links, 1, -2, $breadcrumb );
    }

    return $links;
}
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
        'graduate_menu'  => __( 'Graduate Menu', 'husb' ),
        'mba_menu'  => __( 'MBA Menu', 'mba_menu' ),
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

//Upcoming events
function uep_custom_post_type() {
    $labels = array(
        'name'                  =>   __( 'Events', 'uep' ),
        'singular_name'         =>   __( 'Event', 'uep' ),
        'add_new_item'          =>   __( 'Add New Event', 'uep' ),
        'all_items'             =>   __( 'All Events', 'uep' ),
        'edit_item'             =>   __( 'Edit Event', 'uep' ),
        'new_item'              =>   __( 'New Event', 'uep' ),
        'view_item'             =>   __( 'View Event', 'uep' ),
        'not_found'             =>   __( 'No Events Found', 'uep' ),
        'not_found_in_trash'    =>   __( 'No Events Found in Trash', 'uep' )
    );
 
    $supports = array(
        'title',
        'editor',
        'excerpt'
    );
 
    $args = array(
        'label'         =>   __( 'Events', 'uep' ),
        'labels'        =>   $labels,
        'description'   =>   __( 'A list of upcoming events', 'uep' ),
        'public'        =>   true,
        'show_in_menu'  =>   true,
        'menu_icon'     =>   'dashicons-calendar',
        'has_archive'   =>   true,
        'rewrite'       =>   true,
        'supports'      =>   $supports
    );
 
    register_post_type( 'event', $args );
}
add_action( 'init', 'uep_custom_post_type' );

function my_pre_get_posts( $query ) {
	
	// do not modify queries in the admin
	if( is_admin() ) {
		
		return $query;
		
	}
	

	// only modify queries for 'event' post type
	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'event' ) {
		
		$query->set('orderby', 'meta_value');	
		$query->set('meta_key', 'date');	 
		$query->set('order', 'ASC'); 
		
	}
	

	// return
	return $query;

}

add_action('pre_get_posts', 'my_pre_get_posts');

function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}



?>