<?php get_header(); ?>
    <!-- uvod -->
    <section class="uvod text-center text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php the_field('naslov_prve_sekcije'); ?></h2>
                    <p class="lead"><?php the_field('tekst_prve_sekcije'); ?></p>
                      
                </div>
            </div>
        </div>
    </section>
    <!-- teme -->
    <section class="teme py-5 text-center">
        <div class="container">
            <h2><?php the_field('naslov_druge_sekcije'); ?></h2>
            <p class="lead"><?php the_field('podnaslov_druge_sekcije'); ?></p>
            <div class="row">
                <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-2s">
                    <h3><?php the_field('naslov_iznad_prve_ikonice'); ?></h3>
                    <i class="fas fa-running"></i>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-3s">
                    <h3><?php the_field('naslov_iznad_druge_ikonice'); ?></h3>
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-4s">
                    <h3><?php the_field('naslov_iznad_trece_ikonice'); ?></h3>
                    <i class="fas fa-carrot"></i>
                </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <section class="cta text-center">
        <div class="container">
            <h2><?php the_field('naslov_trece_sekcije'); ?></h2>
            <p class="lead"><?php the_field('podnaslov_trece_sekcije'); ?></p>
            <div class="alert alert-success lead d-inline-block"><?php the_field('uokvireni_tekst_trece_sekcije'); ?></div>
            <br>
            <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-lg"><?php echo('PRIJAVI SE'); ?></a>
            
        </div>
    </section>
    <?php get_footer(); ?>