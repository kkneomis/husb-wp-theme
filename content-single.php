
<div class="col-md-9 ">
    <div class="blog-post">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
        <?php the_content(); ?>
    </div><!-- /.blog-post -->
</div>  
<div class="col-md-3">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
</div>
