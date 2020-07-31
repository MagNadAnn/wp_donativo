<?php
    $page_actus = get_posts(
        array(
            'name'      => 'actus',
            'post_type' => 'page'
        )
    );
    $queried_object = get_queried_object();
    if ($page_actus) {
        $title = $page_actus[0]->post_title;
        $excerpt = $page_actus[0]->post_excerpt;
    }
?>

<?php if ($page_actus) : ?>

    <article class="fw-section single__content__wrap">

        <?php $placeholeder_img = get_theme_file_uri("img/cover_placeholder.jpg"); ?>
        <div class="cover-img placeholder">
            <img src="<?php echo($placeholeder_img); ?>" />
        </div>

        <div class="chimney small section__container page-intro">

            <h1 class="text_center"><?php echo( $title ); ?></h1>

            <?php if ( $excerpt) : ?>
                <div class="has-medium-font-size text_center block_padding bottom"><?php the_excerpt(); ?></div>
            <?php endif; ?>

        </div>

    </article>

<?php endif; ?>