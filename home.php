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
        


 
</style>

        <style>
    
            .btn-all-news{
                background-color: #043B61;
                font-size: 16px;
                text-transform: uppercase;
                letter-spacing: 2px;
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
            
            
            .section.call-to-action{
                padding: 0px;
            }
            .section.call-to-action .col-md-8, .section.call-to-action .col-md-4{
                padding: 50px;
            }
            
            .section.call-to-action h3{
                color: #fff;
            }
            
            
            .section-no-padding h1{
                color: #043B61
            }
            
            .section-no-padding .table{
                color: #333;
            }
            
            .upcoming-events{
                background: #fff;
                padding: 50px;
                min-height: 450px;
                color: #fff;
            }
            
            
            
            
            
            /**-------table ------*/
            
.table > thead > tr > th {
  border-bottom-width: 1px;
  font-size: 18px;
  font-weight: 300;
}
.table .radio,
.table .checkbox {
  margin-top: 0;
  margin-bottom: 0;
  padding: 0;
  width: 15px;
}
.table .radio .icons,
.table .checkbox .icons {
  position: relative;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 12px 8px;
  vertical-align: middle;
}
.table .th-description {
  max-width: 150px;
}
.table .td-price {
  font-size: 26px;
  font-weight: 300;
  margin-top: 5px;
  text-align: right;
}
.table .td-total {
  font-weight: 600;
  font-size: 18px;
  padding-top: 20px;
  text-align: right;
}
.table .td-actions .btn {
  opacity: 0.36;
  filter: alpha(opacity=36);
}
.table .td-actions .btn.btn-xs {
  padding-left: 3px;
  padding-right: 3px;
}
.table > tbody > tr {
  position: relative;
}
.table > tbody > tr:hover .td-actions .btn {
  opacity: 1;
  filter: alpha(opacity=100);
}

.table-shopping > thead > tr > th {
  font-size: 14px;
  text-transform: uppercase;
  color: #9A9A9A;
  font-weight: 400;
}
.table-shopping > tbody > tr > td {
  font-size: 16px;
}
.table-shopping > tbody > tr > td b {
  display: block;
  margin-bottom: 5px;
}
.table-shopping .td-name,
.table-shopping .td-number {
  font-weight: 300;
  font-size: 22px;
}
.table-shopping .td-name {
  min-width: 200px;
}
.table-shopping .td-number {
  text-align: right;
  min-width: 70px;
}
.table-shopping .td-number small {
  margin-right: 3px;
}
.table-shopping .img-container {
  width: 120px;
  height: 120px;
  overflow: hidden;
  display: block;
  border-radius: 6px;
}
.table-shopping .img-container img {
  width: 100%;
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
                        <a href="#" class="btn btn-primary btn-block btn-all-news">View All</a>
                    </div>
                </div> <!---- end news section -->
                <div section class="section-no-padding">
                    <div class="row mba-ad">
                        <div class="col-md-2 "></div>
                        <div class="col-md-4 mba-ad-content">
                            <h2>We assist our partners during each stage of the process.</h2>
                            <a class="btn btn-edge" href="#">See how we do it</a>
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
                                <h3>Just released: our 2018 BottomLine maganzine </h3>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-edge btn-edge-blue" href="#">Have a look</a>
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
                                                <th class="text-center">#</th>
                                                <th>Event</th>
                                                <th class="text-right">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Andrew Mike</td>
                                                <td class="text-right">&euro; 99,225</td>

                                            </tr>
                                            <tr>

                                                <td class="text-center">2</td>
                                                <td>John Doe</td>
                                                <td class="text-right">&euro; 89,241</td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Alex Mike</td>
                                                <td class="text-right">&euro; 92,144</td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Mike Monday</td>
                                                <td class="text-right">&euro; 49,990</td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Paul Dickens</td>
                                                <td class="text-right">&euro; 69,201</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    
    

    function toggle(e){
        id = 'collapse' + e
        //alert(elmnt)
        tab = document.getElementById(id)
        console.log(tab)
        $(tab).click();
        //alert(tab)
        //$(tab).trigger( "click" );
    }

    
    
</script>


