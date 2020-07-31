<?php
/*
 * Template Name: Erreur 404
 *
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>

<?php get_header(); ?>

<main class="main-content">

<?php $args = array( 'name' => 'erreur-404', 'post_type' => 'page' ); ?>
<?php $the_query = new WP_Query( $args ); ?>
<?php if ( $the_query -> have_posts() ) : ?>
<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

    <article class="fw-section single__content__wrap erreur-404-wrap">
        <?php the_content(); ?>
    </article>


<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>