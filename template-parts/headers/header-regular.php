
    <div class="bs-header" >
        <div class="image">
            <?php  if ( has_post_thumbnail() ) :?>
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title_attribute(); ?>" >
            <?php else : ?>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/headers/default.jpg" alt="Howard University students" >
            <?php endif; ?>
        </div>
      <div class="header-container">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png" class="main-logo"></a>
        <h1><?php the_title(); ?></h1>
        <ol class="breadcrumb">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <li>','</li>
            ');
            }
            ?>

        </ol>
      </div>
    </div>


