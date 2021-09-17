<?php get_header(); ?>
    <!-- blog -->
    <section class="blog container py-3">
        <div class="row justify-content-between">
            <div class="col-md-7">
              
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="post py-5">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                        <p class="meta"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                           <?php the_author(); ?> 
                        </a>
                        |  <?php get_the_date('F j, V'); ?>
                        </p>
                    </div>
                    <div class="text">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        
                    </div>
                </div>
                <?php endwhile; else : ?>
                    <?php_e('Nema napisanih blog postova'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 py-5">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    
    
    <?php get_footer(); ?>