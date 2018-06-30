<?php
/**
 * Template Name: News
 * Template Post Type: post, page
 */



the_post();

// Get 'team' posts
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$team_posts = get_posts( array(
	'post_type' => 'post',
	'posts_per_page' => 6, // Unlimited posts
	'orderby' => 'date', // Order alphabetically by name
    'paged'          => $paged
) );

$the_query = new WP_Query( $team_posts ); 

if ( $team_posts ):
?>
<?php get_header(); ?>

<div class="header-container news">
    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png" class="main-logo news"></a>
    <span class="thin-header-title">
        <h2>News</h2>
    </span>
</div>


    <div class="page-section news white">
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
                                <div class="card card-background">
                                    <div class="image">
                                        <?php if ( $thumb_src ): ?>
                                            <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" >
                                        <?php else: ?>
                                            <img src="http://atlantablackstar.com/wp-content/uploads/2018/03/Howard.jpg" alt="<?php the_title(); ?>" >
                                        <?php endif; ?>
                                        <div class="filter"></div>
                                    </div>
                                     <div class="content">
                                        <p class="category">Latest news</p>
                                        <h4 class="title"><?php the_title(); ?></h4>
                                    </div>
                                    <div class="footer">
                                       <div class="stats pull-right">
                                            <i class="fa fa-clock-o"></i> <?php echo get_the_date( 'M d, Y' ); ?>
                                       </div>
                                    </div>
                                </div> <!-- end card -->
                           </div>
                        </a>
                     <?php endforeach; ?>
                        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
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
