<?php
/**
 * Template Name: Events
 * Template Post Type: page
 */



the_post();


$team_posts = get_posts( array(
	'post_type' => 'event',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'date', // Order alphabetically by name
    'paged'          => $paged
) );


if ( $team_posts ):
?>
<?php get_header(); ?>

<style>
/* Using panels to display blog date */
.panel.date {
    margin: 0px;
    width: 60px;
    text-align: center;
    padding: 2px solid #000;
}

.panel.date .month {
    padding: 2px 0px;
    font-weight: 700;
    text-transform: uppercase;
}

.panel.date .day {
    padding: 3px 0px;
    font-weight: 700;
    font-size: 1.5em;
}

</style>

<?php get_template_part( 'template-parts/headers/header', 'regular' ); ?>
    <div class="page-section white">
        <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2">   
                   <div class="panel panel-primary">  
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-calendar"></i>
                                Calendar Events
                            </h3>
                        </div>
                       <div class="panel-body">
                         <ul class="media-list">
                       
                            <?php
                            foreach ( $team_posts as $post ): 
                            setup_postdata($post);

                            ?>
                                <li class="media">
                                    <div class="media-left">
                                        <div class="panel panel-primary text-center date">
                                            <div class="panel-heading month">
                                                <span class="panel-title strong">
                                                    <?php $date = get_post_meta($post->ID, 'date', true); if($date != ''){echo date("M", strtotime($date));} ?>
                                                </span>
                                            </div>
                                            <div class="panel-body text-primary day">
                                                <?php $date = get_post_meta($post->ID, 'date', true); if($date != ''){echo date("d", strtotime($date));} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php the_field('name'); ?>
                                        </h4>
                                        <p>
                                            <?php the_field('description'); ?>
                                        </p>
                                    </div>
                                </li>
                             <?php endforeach; ?>
                           </ul>
                       </div>
                   </div>      
              </div>            
            </div>            
        </div><!---container ---->
    </div><!---page section---->
<?php get_footer(); ?>


<?php endif; ?>


