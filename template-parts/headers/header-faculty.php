<!---This is the picture you see in the header---->    
<div class="bs-header" >
    <div class="image">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/headers/faculty.jpg" alt="Howard University Faculty" >
    </div>
  <div class="header-container">
    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png" class="main-logo"></a>
    <h1>Faculty</h1>
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