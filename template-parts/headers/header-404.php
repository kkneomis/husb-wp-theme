


    <div class="bs-header" >
        <div class="image">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/headers/default.jpg" alt="Howard University Wakanda" >
        </div>
      <div class="header-container">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png" class="main-logo"></a>
        <h1>Page Not Found</h1>
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
