<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<main class="main-content">
    <article class="fw-section single__content__wrap">

        <div class="cover-img">
            <?php the_post_thumbnail("full"); ?>
        </div>
        <div class="chimney small section__container page-intro">
            <h1 class="text_center"><?php the_title(); ?></h1>
            <div class="has-medium-font-size text_center block_padding bottom"><?php the_excerpt(); ?></div>
            <p class="text_center block_padding bottom"><?php the_tags('', null, null); ?></p>
            <p class="text_center text_pink">Posté le <?php the_date(); ?></p>
        </div>
        <?php the_content(); ?>

    </article>

</main>

<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>