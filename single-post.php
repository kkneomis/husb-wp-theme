<?php get_header(); ?>

    
<div class="header-container news">
    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png" class="main-logo news"></a>
    <span class="thin-header-title">
        <h2>News</h2>
    </span>
</div>

<div class="page-section news white">
    <div class="container">
        <div class="row">
                <div class="col-md-3">
                    <h3 class="widgettitle">Recent Stories</h3>
                    <?php

                    the_post();

                    // Get 'team' posts
                    $posts = get_posts( array(
                        'post_type' => 'post',
                        'posts_per_page' => 4, // Unlimited posts
                        'orderby' => 'date', // Order alphabetically by name
                    ) );

                    foreach ( $posts as $post ): 
                    setup_postdata($post);

                    // Resize and CDNize thumbnails using Automattic Photon service
                    $thumb_src = null;
                    if ( has_post_thumbnail($post->ID) ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
                        $thumb_src = $src[0];
                    }
                    ?>
                    <div class="similar-news">
                        <a href="<?php the_permalink(); ?>">
                            <p><?php the_title(); ?></p>
                        </a>
                    </div>
                    <?php endforeach; ?> 
                    <a href="<?php echo home_url(); ?>/news" class="btn btn-edge btn-edge-dark btn-block">Back to all news</a>

                </div> <!--- end colmd3 ---->

            <?php wp_reset_postdata(); ?>
            <div class="col-md-7">
              <span class="label"><?php the_date(); ?></span>
               <span class="label">Written by <?php the_author(); ?></span>
               <h1><?php the_title(); ?></h1>
                <span><?php the_date(); ?></span>

                <?php  if ( has_post_thumbnail() ) :?>
                    <div class="article-image" >
                        <img src="<?php the_post_thumbnail_url() ?>" class="img-responsive"> 
                    </div>
                <?php endif; ?>

                <?php the_content(); ?>

            </div>  
        </div>
    </div>
</div><!---page section---->
<?php get_footer(); ?>

