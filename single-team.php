
<?php
/*
 * Template Name: Faculty Profile
 * Template Post Type: team
 */
  
 get_header();   
 get_template_part( 'template-parts/headers/header', 'faculty' ); 

?>

<div class="page-section white">
        <div class="container">
				<div class="row">
                    <div class="col-md-3 col-md-offset-1" >
						    <?php  if ( has_post_thumbnail() ) :?>
                                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive">
                            <?php else : ?>
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/default_faculty.jpg" alt="Profile Image" class="img-responsive">
                            <?php endif; ?>
                              <br>
                              <p><?php echo get_post_meta($post->ID, 'faculty_phone', true); ?></p>
                              <p><?php echo get_post_meta($post->ID, 'faculty_email', true); ?></p>
					</div>
					<div class="col-md-6">
                              <h2><?php echo get_post_meta($post->ID, 'name', true); ?></h2>
                              <p><?php echo get_post_meta($post->ID, 'position', true); ?>
                                  <br><?php echo get_post_meta($post->ID, 'department', true); ?>
                                </p>
                              
                              <hr> 
                              
                            <?php if ( get_post_meta( $post->ID, 'biography', true)  ): ?>
                              <strong><p >Biography</p></strong>
                              <div class="notcomment"><?php echo get_post_meta($post->ID, 'biography', true); ?></div>
                             <?php endif; ?> 
                             
                            <?php if ( get_post_meta( $post->ID, 'areas_of_expertise', true)  ): ?>
                              <hr> 
                              <strong><p>Areas of expertise</p></strong>
                              <?php echo get_post_meta($post->ID, 'areas_of_expertise', true); ?>
                            <?php endif; ?>  
                              
                             <?php if ( get_post_meta( $post->ID, 'education', true)  ): ?>
                                <hr> 
                                <strong><p>Education</p></strong>
                              <?php echo get_post_meta($post->ID, 'education', true); ?>
                             <?php endif; ?> 
                              
                            <?php if ( get_post_meta( $post->ID, 'courses_taught', true)  ): ?>
                                <hr> 
                                <strong><p>Courses Taught</p></strong> 
                                <?php echo get_post_meta($post->ID, 'courses_taught', true); ?>
                            <?php endif; ?> 
                               
                            <?php if ( get_post_meta( $post->ID, 'selected_research', true)  ): ?>
                                <hr>
                                <strong><p>Selected Research</p></strong> 
                              <?php echo get_post_meta($post->ID, 'selected_research', true); ?>
                            <?php endif; ?>
                        
                            <?php if ( get_post_meta( $post->ID, 'awards', true)  ): ?>
                                <hr>
                                <strong><p>Awards</p></strong> 
                                <?php echo get_post_meta($post->ID, 'awards', true); ?>
                            <?php endif; ?>
                        
                        
					</div>
                    <div class="col-md-2"></div>
            </div>
    </div>
</div>

        
<?php get_footer(); ?>