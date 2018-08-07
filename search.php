
<?php
/*
* Template Name: Search Page
* @package shift8web
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
                
                <div class="col-md-8">
                    
                   <?php get_search_form(); ?>
                    <br><br>

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="search-result">
                        <span class="search-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </span><br>
                        <span class="search-post-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span>
                        <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
                    </div>
                    
                    <?php endwhile; ?>
                </div>

 
            </div>
        </div>
    </div><!---page section---->

    <style>
        .search-post-title a {
            font: 600 21px/1.2 'Oswald', sans-serif;
            margin-top: 23px;
            color: #2A6EBB;
            text-decoration: none;
        }    

        .search-post-link a {
            font: 300 14px/1.9 'Open Sans', sans-serif;
            word-wrap: break-word;
            hyphens: auto;
            
        }
        
        .search-post-excerpt {
                font: 300 15px/1.6 'Open Sans', sans-serif;
                color: #555;
                word-wrap: break-word;
                hyphens: auto;
                margin-top: 3px;
            }
        
        .search-result {
            padding-bottom: 20px;
        }
    </style>
<?php get_footer();