<?php get_header(); ?>
    
    <?php get_template_part( 'template-parts/headers/header', 'regular' ); ?>
        <div class="page-section white">
            <div class="container">
                <div class="row">
                        <div class="col-md-3 side">
                            <nav class="wordpress_menu" id="myAffix" >
                                <ul class="nav nav-stacked fixed barred" >
                                    <li>
                                        <ul class="nav nav-stacked">
                                            <?wp_nav_menu( array( 'theme_location' => 'about_us_sub', 'container_class' => 'new_menu_class' ) ); ?>
                                        </ul>
                                    </li>
                                </ul>          
                            </nav>
                        </div> <!--- end colmd3 ---->
                    <div class="col-md-9">
                       <? if (have_posts()):
                            while(have_posts()): the_post(); 
                                the_content(); 
                            endwhile; 
                        endif; ?>
                    </div>  
                </div>
            </div>
        </div><!---page section---->
    <?php get_footer(); ?>
                        
<script>
$('#myAffix').affix({
  offset: {
    top: function () {
      return (this.top = $('.bs-header').outerHeight(true)) + 20
    },
    bottom: function () {
      return (this.bottom = $('.footer-section').outerHeight(true)) + 200
    }
  }
})

</script>

<style >

    .affix{
        width: 300px;
        top: 50px;
        z-index: 9999 !important;
    }
</style>