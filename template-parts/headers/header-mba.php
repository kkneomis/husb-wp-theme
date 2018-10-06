
<div class="bs-header large" >
    <div class="image">
        <?php  if ( has_post_thumbnail() ) :?>
            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title_attribute(); ?>" >
        <?php else : ?>
            <img src="http://www.bschool.howard.edu/wp-content/uploads/2018/07/HU-MBA1.jpg" alt="Howard University students" >
        <?php endif; ?>
    </div>
  <div class="header-container">
    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png" class="main-logo"></a>
    <div class="col-md-8">
        <h1>The Howard MBA</h1>
        <div class="mba-header-caption">
            <p>
             A comprehensive MBA crafted to help you elevate your career. 
            </p>  
        </div>
    </div>

  </div>
</div>


<style>
    .header-container{
        padding-top: 200px;
    }
    
    .bs-header.large h1{
        font-size: 70px;
    }
    .mba-header-caption p{
        font-style: normal;
        font-family: 'Open Sans', sans-serif;
        padding-left: 100px;
        font-size: 20px;
    }
    
    
    @media (max-width: 700px) {
        .header-container{
            padding-top: 50px;
        }

        .bs-header.large h1{
            font-size: 50px;
        }
        .mba-header-caption p{
            padding-left: 30px;
        }
    }
    
</style>
