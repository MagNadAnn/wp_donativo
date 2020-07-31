<?php
/**
 * The template for displaying experpts of pages and single posts
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


<li>

<?php $thumbnail = get_the_post_thumbnail() ?>
<?php if ( $thumbnail) : ?>
    <div class="wp-block-latest-posts__featured-image">
        <?php the_post_thumbnail("thumbnail"); ?>
    </div>
<?php endif; ?>

    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    
    <time class="wp-block-latest-posts__post-date"><?php the_date(); ?></time>

<?php $excerpt = get_the_excerpt() ?>
<?php if ( $excerpt) : ?>
    <div class="wp-block-latest-posts__post-excerpt"><?php the_excerpt(); ?></div>
<?php endif; ?>

<?php $tags = get_the_tags() ?>
<?php if ( $tags) : ?>
    <p class="wp-block-latest-posts__post-tags"><strong>Thématiques :</strong>
        <?php foreach( $tags as $tag ) { ?>
        <span><?php echo($tag->name); ?></span>
        <?php } ?>
    </p>
    <?php endif; ?>

</li>