<?php
/*
Template Name: page d'accueil
*/
?>

<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<main class="main-content">
    <article class="fw-section single__content__wrap">

        <?php the_content(); ?>

    </article>

</main>

<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>