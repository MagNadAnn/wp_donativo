<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<main class="main-content">
    <article class="fw-section single__content__wrap">

    <?php $thumbnail = get_the_post_thumbnail() ?>
    <?php if ( $thumbnail) : ?>
        <div class="cover-img">
            <?php the_post_thumbnail("large"); ?>
        </div>
    <?php else : ?>
        <div class="cover-img placeholder">
        <?php $placeholeder_img = get_theme_file_uri("img/cover_placeholder.jpg"); ?>
            <img src="<?php echo($placeholeder_img); ?>" />
        </div>
    <?php endif; ?>

        <?php the_content(); ?>

    </article>

</main>

<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>