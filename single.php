<?php get_header(); ?>

<!-- BEGIN MAIN -->
    <section class="row">
        <div class="twelve columns">
            <!-- BEGIN LOOP -->
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        if ( has_post_thumbnail() ) { ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    <?php
                    } // end while
                } // end if
            ?>
            <!-- END LOOP -->
        </div>
    </section>
<!-- END MAIN -->

<?php get_footer(); ?>
