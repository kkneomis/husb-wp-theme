<?php 
/*
Template Name: Major Template
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/headers/header', 'regular' ); ?>
    <div class="page-section white">
        <div class="container">
            <div class="row">
                <div class="col-md-3 side">
                	<nav class="wordpress_menu" >
					    <ul class="nav nav-stacked fixed barred" >
					        <li>
					            <ul class="nav nav-stacked">
					            	<?wp_nav_menu( array( 'theme_location' => 'majors', 'container_class' => 'new_menu_class' ) ); ?>
					            </ul>
					        </li>
					    </ul>          
					</nav>
                </div> <!--- end colmd3 ---->
                
                <div class="col-md-6">
                   <? if (have_posts()):
                   		while(have_posts()): the_post(); 
                   			the_content(); 
                   		endwhile; 
                   	endif; ?>
                </div>

                <div class="col-md-3">
                	<div class="spotlight">
                        <? if ( get_post_meta( $post->ID, 'note-red', true ) ) { ?>
                            <div class="note red">
                                <?php echo get_post_meta($post->ID, 'note-red', true); ?>
                            </div>
                        <? } ?> 
                        <? if ( get_post_meta( $post->ID, 'note-blue', true ) ) { ?>
                            <div class="note blue">
                                <?php echo get_post_meta($post->ID, 'note-blue', true); ?>
                            </div>
                        <? } ?> 
                        <? if ( get_post_meta( $post->ID, 'note-light-blue', true ) ) { ?>
                            <div class="note light-blue">
                                <?php echo get_post_meta($post->ID, 'note-light-blue', true); ?>
                            </div>
                        <? } ?> 
				    </div>                  
				</div>  
            </div>
        </div>
    </div><!---page section---->
<?php get_footer(); ?>