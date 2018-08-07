<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/headers/header', 'search' ); ?>
    <div class="page-section white">
        <div class="container">
            <div class="row">
                <div class="col-md-3 side">
                	<nav class="wordpress_menu" >
					    <ul class="nav nav-stacked fixed barred" >
					        <li>
					            <ul class="nav nav-stacked">
					            	<?wp_nav_menu( array( 'theme_location' => 'about_us_sub', 'container_class' => 'new_menu_class' ) ); ?>
					            </ul>
					        </li>
					    </ul>          
					</nav>
                    

                </div> <!--- end colmd3 ---->
                
                <div class="col-md-6">
                   <?php get_search_form(); ?>

                   <?php
					global $wp_query;
					$total_results = $wp_query->found_posts;
					?>
                </div>

 
            </div>
        </div>
    </div><!---page section---->
<?php get_footer();