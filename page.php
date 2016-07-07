<?php get_header(); ?>

<!-- BEGIN MAIN -->
    <section class="row">
        <div class="eight columns">
            <!-- BEGIN LOOP -->
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    <?php
                    } // end while
                } // end if
            ?>
            <!-- END LOOP -->
        </div>

        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>

    </section>
<!-- END MAIN -->

<?php get_footer(); ?>
