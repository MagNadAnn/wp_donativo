<?php
/*
Template Name: page d'attente
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <title><?php bloginfo( 'name' ); ?> - <?php the_title(); ?></title>
</head>
<body>
<?php wp_footer(); ?>
<?php $logged_in = is_user_logged_in() ? 'with-wp-bar' : false; ?>
<div class="site <?php echo($logged_in); ?>">

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<main>

    <section class="fw-section fh-section featured-slide with-frame block_overflow y-hidden">

        <div class="triangle top left"><span></span></div>
        <div class="triangle bottom right"><span></span></div>
        <div class="side-drawings standard top left cover"></div>
        <div class="side-drawings standard bottom right cover"></div>
        <div class="featured-slide__frame"></div>

        <div class="block_v-center chimney x-small featured-slide__content">
            <article class="section__container single__content__wrap">
                
                <div class="single__content"><?php the_content(); ?></div>

            </article>
        </div>


    </section>

</main>

<?php
// End the loop.
endwhile;
?>

</div>
</body>
</html>