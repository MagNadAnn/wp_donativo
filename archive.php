<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<main class="main-content">
    
    <?php get_template_part( 'archive-nav' ); ?>

    <section class="fw-section">
        <div class="chimney">

        <?php if ( have_posts() ) : ?>

            <ul class="wp-block-latest-posts wp-block-latest-posts__list is-grid columns-3 has-dates accroches-post columns section__container">

                <?php
                // Start the Loop.
                while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'actus' ); ?>

                <?php
                // End the loop.
                endwhile;
                ?>

            </ul>
            
            <?php wp_reset_postdata(); ?>

        <?php
        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>