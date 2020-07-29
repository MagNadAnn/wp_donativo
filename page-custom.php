<?php
/*
Template Name: Mise en page sophistiquée
*/
?>

<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<main class="main-content">
    <article class="fw-section single__content__wrap">

        <div class="cover-img">
            <?php the_post_thumbnail("full"); ?>
            <div class="featured-slide__frame"></div>
        </div>

        <?php the_content(); ?>

    </article>

</main>

<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>