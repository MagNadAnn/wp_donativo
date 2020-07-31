<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing all content.
 */
?>

    <section class="fw-section footer-cta bg-d-mint_light">
        <div class="chimney">
            <div class="columns footer-cta__container">

                <div class="column column_2-3">
                    <div class="footer-cta__catchphrases">
                        <p>Par où commence une mission&nbsp;?</p>
                        <p>Comment Donativo construit-ille son accompagnement&nbsp;?</p>
                        <p>Quels livrables et quel SAV pour nos interventions&nbsp;?</p>
                    </div>
                </div>

                <div class="column column_1-3">
                    <div class="footer-cta__button">
                        <p><span class="solidarity">Découvrez les grandes étapes</span> <span class="solidarity">d’une mission&nbsp;!</span></p>
                        <p><a href="<?php bloginfo( 'url' ); ?>/cheminer-avec-nous/" class="button simple secundary">Cheminer avec nous</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="footer bg-l-cream">
        <div class="chimney">
            <div class="columns">

                <div class="column footer__signature">
                    <div class="signature">
                        <?php $logo_donativo = get_theme_file_uri("img/logo_poissons-jaunes.png"); ?>
                        <img src="<?php echo($logo_donativo); ?>" alt="Donativo" class="signature__image" />
                        <p class="signature__nom">Marion & Patrice</p>
                        <p><a href="tel:+33664261717" class="link-alt">06 64 26 17 17</a> - <a href="tel:+33609208900" class="link-alt">06 09 20 89 00</a></p>
                        <p><a href="mailto:bienvenue@donativo.fr" class="link-alt">bienvenue@donativo.fr</a></p>
                    </div>
                </div>

                <div class="column footer__menu">
                    <div class="columns">

                    <?php if ( has_nav_menu( 'footer_1' ) ) : ?>
                        <div class="column column_1-3">
                            <h4 class="footer__title">Donativo</h4>
                            <?php wp_nav_menu(array(
                                'menu' => 'footer_1', 
                                'menu_class' => 'footer__links',
                                'walker' => new CSS_Menu_WalkerFooter()
                            )); ?>
                            <?php $logo_facebook = get_theme_file_uri("img/logo_facebook.png"); ?>
                            <?php $logo_instagram = get_theme_file_uri("img/logo_instagram.png"); ?>
                            <p class="block_margin margin top">
                                <a href="https://www.facebook.com/donativo.revelateur.de.solutions.collectives" title="Visiter notre page Facebook" class="img-link"><img src="<?php echo($logo_facebook); ?>" alt="Facebook" class="" /></a>
                                <a href="#" title="Visiter notre page Instagram" class="img-link"><img src="<?php echo($logo_instagram); ?>" alt="Instagram" class="" /></a>
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'footer_2' ) ) : ?>
                        <div class="column column_1-3">
                            <h4 class="footer__title">Nos savoir-faire</h4>
                            <?php wp_nav_menu(array(
                                'menu' => 'footer_2', 
                                'menu_class' => 'footer__links',
                                'walker' => new CSS_Menu_WalkerFooter()
                            )); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'footer_3' ) ) : ?>
                        <div class="column column_1-3">
                            <h4 class="footer__title">Nos expertises</h4>
                            <?php wp_nav_menu(array(
                                'menu' => 'footer_3', 
                                'menu_class' => 'footer__links',
                                'walker' => new CSS_Menu_WalkerFooter()
                            )); ?>
                        </div>
                    <?php endif; ?>

                    </div>
                </div>

            

            </div>
        </div>
    </footer>
</div>
</body>
</html>