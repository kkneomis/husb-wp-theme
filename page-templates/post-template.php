<?php
/**
 * Template Name: News
 * Template Post Type: post, page
 */



the_post();

// Get 'team' posts
$team_posts = get_posts( array(
	'post_type' => 'post',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'date', // Order alphabetically by name
) );

if ( $team_posts ):
?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/headers/header', 'regular' ); ?>


    <div class="page-section white">
        <div class="container">
            <div class="row is-table-row"> 


                  <div class="col-md-10 col-md-offset-1" >
                    <div id="news-grid">
                    <?php
                    foreach ( $team_posts as $post ): 
                    setup_postdata($post);

                    // Resize and CDNize thumbnails using Automattic Photon service
                    $thumb_src = null;
                    if ( has_post_thumbnail($post->ID) ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
                        $thumb_src = $src[0];
                    }
                    ?>
                        <a href="<?php the_permalink(); ?>" >
                            <div class="col-md-4 ">
                                <div class="news-clip">
                                    <div class="image">
                                        <?php if ( $thumb_src ): ?>
                                            <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>" width="100%">
                                        <?php else: ?>
                                            <img src="https://imagesvc.timeincapp.com/v3/mm/image?url=https%3A%2F%2Fimages.hellogiggles.com%2Fuploads%2F2017%2F04%2F26103325%2FGettyImages-521981437.jpg&w=700&q=85" alt="<?php the_title(); ?>" width="100%">
                                        <?php endif; ?>
                                    </div>    
                                    <div class="caption">
                                        <div class="date">
                                            <span class="day"><?php echo get_the_date( 'd' ); ?></span>
                                            <span class="month"><?php echo get_the_date( 'M' ); ?></span>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                        
                                    </div>
                                </div>
                           </div>
                        </a>

                     <?php endforeach; ?>
                    </div>  
                 </div>
            </div>
        </div>
        
        
    </div><!---page section---->
<?php get_footer(); ?>



<?php endif; ?>

<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/masonry.min.js"></script>

<script>
  var $container = $('#news-grid');
      $container.masonry({
        itemSelector : '.col-md-4'
      });
</script>
