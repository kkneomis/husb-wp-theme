<?php get_header(); ?>
<style>

/*------------------------------------------------------------------------*/
/* Parallax                           
/*------------------------------------------------------------------------*/
.parallax {
  perspective: 1px;
  height: 100vh;
  overflow-x: hidden;
  overflow-y: auto;
}

.parallax__layer--base {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    z-index: 4;
}

.parallax__layer--back {
    transform: translateZ(-2px) scale(3);
    z-index: 2;
}

.mba-ad-image{
    min-height: 450px;
    background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/images/home/MBA_Advertisement.jpg');
    background-size: cover;
}

.img-feature-boseman{
    min-height: 450px;
    background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/images/home/ChadwickBoseman.jpg');
    background-position: center;
    background-size: cover;
}

    
</style>

        

    <div id="main">
        <div class="parallax" onscroll="getMenu();" >
            <div class="parallax__layer parallax__layer--back">
                <div class="hero-section">
                    <div class="no-hero-vid"></div>
                    <div class="hero-media">
                        <video autoplay="autoplay" class="video-background" loop="" preload=""><source src="http://res.cloudinary.com/durryikj6/video/upload/v1484412892/howarddemo_s7ontn.mp4" type="video/mp4"></video>
                    </div>
                    <div class="hero-overlay"></div>
                    <div class="introduction text-center" style="margin-top: -185.5px;">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png" style="margin:auto;" width="100%">
                        </div>
                    </div>
                    <div class="learn-more smoothscroll">
                        <a href="#home">
                            <div class="mouse-icon">
                                <div class="wheel"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- / parallax layer back -->
            
            <div class="parallax__layer parallax__layer--base">
                <div class="section white main" id="home" >
                    
                    <h1 class="center lead">News</h1>
                    <div class="container">
                        <div class="row">
                            
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
                            <div class="col-md-3">
                                <a href="<?php the_permalink(); ?>">
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
                                </a>
                            </div>

                     <?php endforeach; ?>                   
                        </div>
                        <a href="<?php echo home_url(); ?>/news/" class="btn btn-primary btn-block btn-all-news">View All</a>
                    </div>
                </div> <!---- end news section -->
                <div section class="section-no-padding">
                    <div class="row mba-ad">
                        <div class="col-md-2 "></div>
                        <div class="col-md-4 mba-ad-content">
                            <h2>We assist our partners during each stage of the process.</h2>
                            <a class="btn btn-edge" href="<?php echo home_url(); ?>/mba">See how we do it</a>
                        </div>
                        <div class="col-md-6 no-mg">
                            <div class="mba-ad-image">
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div section class="section call-to-action blue">
                    <div class="">
                        <div class="row">
                            <div class="col-md-8 map-pattern">
                                <h3>Just released: our 2018 BottomLine magazine </h3>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-edge btn-edge-blue" href="<?php echo home_url(); ?>/bottom-line">Have a look</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                <div section class="section-no-padding">
                    <h1 class="center lead">Upcoming Events</h1>
                    <div class="row events">
                        <div class="col-md-6">
                            <div class="upcoming-events">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><strong>Event</strong></th>
                                                <th class="text-right"><strong>Date</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            the_post();
                                            
                                            // find date time now
                                            $date_now = date('Y-m-d H:i:s');

                                            $args = array('post_type'         => 'event',
                                                          'posts_per_page'    => 5,
                                                          'orderby'           => 'meta_value',
                                                          'order'	          => 'DESC',
                                                          'meta_query' 		=> array(
                                                                array(
                                                                    'key'			=> 'date',
                                                                    'compare'		=> '>=',
                                                                    'value'			=> $date_now,
                                                                    'type'			=> 'DATETIME'
                                                                )
                                                            )
                                                         );
                                            $loop = new WP_Query($args);
                                            if ( $loop->have_posts() ) : 
                                                while ( $loop->have_posts() ) :
                                                    $loop->the_post();
                                            
                                                // Get the custom field
                                               $post_date = the_field('date');
                                               $post_date = strtotime( $post_date );

                                                    ?>

                                                    <tr>
                                                        <td><?php the_field('name'); ?></td>
                                                        <td class="text-right">
                                                             <?php $date = get_post_meta($post->ID, 'date', true); if($date != ''){echo date("M d, Y", strtotime($date));} ?>
                                                        </td>
                                                    </tr>
                                            <?php  endwhile;
                                             else: ?>
                                                <tr><td>No upcoming events.</td></tr>
                                            <?php endif; ?>
                                            <?php wp_reset_postdata(); ?>
                                            <br><br>
                                        </tbody>
                                    </table>
                                                <a href="<?php echo home_url(); ?>/events" class="btn btn-edge btn-edge-dark btn-block">View all events</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="img-feature-boseman"></div>
                        </div>
                        <div class="col-md-2 "></div>
                    </div>
                </div>
                <a href="#" id="back-to-top"><i class="icon-to-top"></i></a>
                <?php get_footer(); ?>
            </div><!-- / parallax layer base -->
        </div><!-- / parallax -->
	</div><!-- / main -->


    
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js">
	</script> 
<script>

//Need this here because main parallax
function getMenu() {
    status=0;
    if ($('#home').offset().top < 200) {
        $('.side-tabs').css({
            'right': '-400px'
        });
        $('.little-tab').css({
            'right': '0'
        })
    } else {
        $('.side-tabs').css({
            'right': '0'
        });
        $('.little-tab').css({
            'right': '-200px'
        })
    }
}    

</script>


