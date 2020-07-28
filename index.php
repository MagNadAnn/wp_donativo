<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<main>

    <section class="fw-section">

        <div class="chimney">
            <article class="page-section__container single__content__wrap">

                <header class="page-header">
                    <h1><?php the_title(); ?></h1>
                </header>
                
                <div class="single__content"><?php the_content(); ?></div>

            </article>
        </div>

    </section>

</main>

<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>