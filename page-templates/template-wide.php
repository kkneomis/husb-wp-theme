<?php
/*
Template Name: Wide no padding
Template Post Type: page
*/
?>


<?php get_header(); ?>

<?php get_template_part( 'template-parts/headers/header', 'regular' ); ?>
    <div class="page-section  no-padding white">
                   <? if (have_posts()):
                   		while(have_posts()): the_post(); 
                   			the_content(); 
                   		endwhile; 
                   	endif; ?>
    </div><!---page section---->
<?php get_footer(); ?>