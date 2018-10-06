<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); 

get_template_part( 'template-parts/headers/header', '404' ); ?>
    <div class="page-section white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 center">
                   <h1>Oops, something went wrong</h1>
                    <p>We just revamped our website! So the link you used may no longer work :( <br> You can use the main menu, the search bar, or one of the links below to get your destination.</p>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Try searching our website</h3>
                            <?php get_search_form(); ?>
                        </div>
                        <div class="col-md-12">
                            <h3>Or using one of these links</h3>
                            <a href="/" class="btn btn-primary btn-md">Go Home</a>
                            <a href="/mba/" class="btn btn-primary btn-md">MBA Program</a>
                            <a href="/departments/" class="btn btn-primary btn-md" >Departments</a>
                            <a href="/student-affairs/" class="btn btn-primary btn-md">Student Affairs</a>
                            <a href="/faculty/" class="btn btn-primary btn-md">Faculty</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div><!---page section---->

<style>
  .page-section  h1 {
        font-size: 50px;
        padding: 20px;
        font-weight: 800;
        font-family: 'Open Sans', sans-serif;
    }
</style>
<?php get_footer(); ?>