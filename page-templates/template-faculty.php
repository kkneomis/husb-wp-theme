<?php
/**
 * Template Name: Team
 * Template Post Type: post, page, product
 */



the_post();

// Get 'team' posts
$team_posts = get_posts( array(
	'post_type' => 'team',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'title', // Order alphabetically by name
    'order' => 'DESC'
) );

if ( $team_posts ):
?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/headers/header', 'regular' ); ?>


    <div class="page-section white">
        <div class="container">
            <div class="row is-table-row"> 
                    <div class="col-md-3">
                        <div class="btn-group-vertical filter-button-group" role="group" aria-label="...">
                            <button class="btn btn-profile btn-block hvr-border-fade" data-filter="*" autofocus>All</button>
                            <button class="btn btn-profile btn-block hvr-border-fade" data-filter=".administration">Administration</button>
                            <button class="btn btn-profile btn-block hvr-border-fade" data-filter=".chair">Chairs</button>
                             <button class="btn btn-profile btn-block hvr-border-fade" data-filter=".accounting">Accounting</button>
                             <button class="btn btn-profile btn-block hvr-border-fade" data-filter=".finance">Finance & International Business</button>
                             <button class="btn btn-profile btn-block hvr-border-fade" data-filter=".cobis">Information Systems & Supply Chain Management</button>
                             <button class="btn btn-profile btn-block hvr-border-fade" data-filter=".management">Management </button>
                             <button class="btn btn-profile btn-block hvr-border-fade" data-filter=".marketing">Marketing </button>
                        </div>                  
                    </div>

                  <div class="col-md-9" >

                    <div id="faculty-list">
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
                                    <div class="col-md-4 faculty-profile accounting
                                                <?php
                                                $posttags = wp_get_object_terms($post->ID, 'department');;  
                                                // echo $posttags;
                                                if ($posttags) {
                                                  foreach($posttags as $tag) {
                                                    echo $tag->slug . ' '; 
                                                  }
                                                }
                                                ?>

                                                ">
                                       <div class="box">
                                           <?php if ( $thumb_src ): ?>
                                            <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" width="150px">
                                            <?php endif; ?>
                                            <div class="details">
                                                <h3><?php the_field('name'); ?>ddd</h3>
                                                <p><span class="role"><?php the_field('position'); ?>d</span><br>
                                                    <?php the_field('department'); ?></p>
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

<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/isotope.js"></script>
<script>              
        var $grid = $('#faculty-list').isotope({
                      // options
                      itemSelector: '.faculty-profile',
                      layoutMode: 'fitRows'
                    });
        // filter items on button click
        $('.filter-button-group').on( 'click', 'button', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        });


</script>


<?php endif; ?>