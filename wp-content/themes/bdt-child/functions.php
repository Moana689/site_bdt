<?php
/**
 * Bureautique de Tahiti - Thème enfant
 *
 * @package BDT_Child
 */

// Charger les styles du thème parent et enfant
add_action('wp_enqueue_scripts', 'bdt_child_enqueue_styles');
function bdt_child_enqueue_styles() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bdt-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-parent-style'), wp_get_theme()->get('Version'));
}

// Ajouter les Google Fonts
add_action('wp_enqueue_scripts', 'bdt_enqueue_fonts');
function bdt_enqueue_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Montserrat:wght@400;600;700&display=swap', array(), null);
}

// ============================================================
// Top Bar avec informations de contact
// ============================================================
add_action('astra_header_before', 'bdt_topbar');
function bdt_topbar() {
    ?>
    <div class="bdt-topbar">
        <div class="bdt-topbar-inner">
            <div class="bdt-topbar-contact">
                <span>&#9742; Commercial : 40.43.00.14</span>
                <span>&#9742; Technique : 40.42.94.01</span>
                <span>&#9993; Papeete, Tahiti</span>
            </div>
            <div class="bdt-topbar-hours">
                Lun-Jeu 8h-17h | Ven 8h-16h | Sam 8h-12h
            </div>
        </div>
    </div>
    <?php
}

// ============================================================
// Footer personnalisé riche
// ============================================================
add_action('astra_footer_before', 'bdt_custom_footer');
function bdt_custom_footer() {
    ?>
    <div class="bdt-footer">
        <div class="bdt-footer-inner">
            <div class="bdt-footer-col">
                <h4>Bureautique de Tahiti</h4>
                <p>Votre partenaire bureautique en Polyn&eacute;sie fran&ccedil;aise depuis 1969.</p>
                <p>Photocopieurs, imprimantes, solutions d'encaissement, informatique et bien plus encore.</p>
            </div>
            <div class="bdt-footer-col">
                <h4>Liens rapides</h4>
                <ul>
                    <li><a href="/site_bdt/">Accueil</a></li>
                    <li><a href="/site_bdt/produits/">Produits</a></li>
                    <li><a href="/site_bdt/promotions/">Promotions</a></li>
                    <li><a href="/site_bdt/services/">Services</a></li>
                    <li><a href="/site_bdt/contact/">Contact</a></li>
                </ul>
            </div>
            <div class="bdt-footer-col">
                <h4>Contact</h4>
                <p>&#9742; Commercial : 40.43.00.14<br>
                &#9742; Technique : 40.42.94.01<br>
                &#128224; Fax : 40.43.17.08</p>
                <p>Angle rues Colette et Paul Gauguin<br>
                BP 210, 98713 Papeete<br>
                Tahiti - Polyn&eacute;sie fran&ccedil;aise</p>
            </div>
            <div class="bdt-footer-col">
                <h4>Horaires</h4>
                <p><strong>Magasin :</strong><br>
                Lun-Jeu : 8h-12h / 13h-17h<br>
                Ven : 8h-12h / 13h-16h<br>
                Sam : 8h-12h</p>
                <p><strong>Atelier SAV :</strong><br>
                Lun-Jeu : 7h30-12h / 13h-16h<br>
                Ven : 7h30-12h / 13h-15h</p>
                <p><a href="https://www.facebook.com/pages/Bureautique-de-Tahiti/464438023574137" target="_blank" rel="noopener noreferrer">&#9758; Suivez-nous sur Facebook</a></p>
            </div>
        </div>
        <div class="bdt-footer-bottom">
            &copy; <?php echo date('Y'); ?> Bureautique de Tahiti - Vous accompagne depuis 1969
        </div>
    </div>
    <?php
}

// Vider le copyright Astra par défaut (on utilise notre footer custom)
add_filter('astra_footer_copyright', '__return_empty_string');

// Désactiver complètement le footer Astra par défaut
add_action('after_setup_theme', 'bdt_disable_astra_footer');
function bdt_disable_astra_footer() {
    remove_action('astra_footer_content', 'astra_footer_small_footer_template', 5);
}

add_filter('astra_the_footer_enabled', '__return_false');

// Activer le tagline (slogan) dans Astra
add_filter('astra_display_site_tagline', '__return_true');
