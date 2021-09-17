<?php 

/*
    Template Name: Glavni sablon
*/

?>
<?php get_header(); ?>
    <!-- blog -->
    <section class="blog container py-3">
        <div class="row justify-content-between">
            <div class="col-md-12">
              
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                    
                </div>
                <?php endwhile; else : ?>
                    <?php_e('Nema napisanih blog postova'); ?>
                <?php endif; ?>
            </div>
           
    </section>
    
    
    <?php get_footer(); ?>