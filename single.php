<?php get_header(); ?>

<?php get_template_part( 'template-parts/headers/header', 'regular' ); ?>
    <div class="page-section white">
        <div class="container">
            <div class="row">
                   <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?> 
            </div>
        </div>
    </div><!---page section---->
<?php get_footer(); ?>