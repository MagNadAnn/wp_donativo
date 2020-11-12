<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
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
  <title><?php bloginfo( 'name' ); ?> <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
</head>
<body>

<?php wp_footer(); ?>
<?php $logged_in = is_user_logged_in() ? 'with-wp-bar' : false; ?>
<div class="site <?php echo($logged_in); ?>">
    <nav class="main-nav <?php echo($logged_in); ?>">
        <a href="<?php bloginfo( 'url' ); ?>" class="main-nav__logo main-nav__logo_mobile"><span>Donativo</span></a>
        <input type="checkbox" id="main-nav__toggler">
        <div id="main-nav__hamburger" class="button-primary"><div id="main-nav__hamburger__line"></div></div>
        <div id="main-nav__splash">
            <div id="main-nav__splash_1" class="bg-d-mint_light">
                <div id="main-nav__splash_2">
                    <div class="main-menu__wrap">
                        <a href="<?php bloginfo( 'url' ); ?>" class="main-nav__logo main-nav__logo_desktop"><span>Donativo</span></a>
                        <?php
							if ( has_nav_menu( 'principal' ) ) : ?>
								<?php wp_nav_menu(array(
									'menu' => 'Principal', 
									'menu_class' => 'main-menu',
									'walker' => new CSS_Menu_Walker()
								)); ?>
							<?php endif;
						?>
                    </div>
                </div>
            </div>    
        </div>
    </nav>