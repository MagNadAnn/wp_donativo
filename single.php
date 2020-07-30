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
            <?php the_post_thumbnail("full"); ?>
        </div>
    <?php else : ?>
        <div class="cover-img placeholder">
        <?php $placeholeder_img = get_theme_file_uri("img/cover_placeholder.jpg"); ?>
            <img src="<?php echo($placeholeder_img); ?>" />
        </div>
    <?php endif; ?>

        <div class="chimney small section__container page-intro">
            <h1 class="text_center"><?php the_title(); ?></h1>

        <?php $excerpt = get_the_excerpt() ?>
        <?php if ( $excerpt) : ?>
            <div class="has-medium-font-size text_center block_padding bottom"><?php the_excerpt(); ?></div>
        <?php endif; ?>
        
        <?php $tags = get_the_tags() ?>
        <?php if ( $tags) : ?>
            <p class="text_center block_padding bottom"><?php the_tags('', null, null); ?></p>
        <?php endif; ?>

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