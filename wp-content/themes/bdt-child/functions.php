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

// Personnaliser le texte du copyright en footer
add_filter('astra_footer_copyright', 'bdt_custom_footer_copyright');
function bdt_custom_footer_copyright($content) {
    $content = '&copy; ' . date('Y') . ' Bureautique de Tahiti - Vous accompagne depuis 1969 | 34 rue Paul Gauguin, Papeete - Tahiti | Tél : 40.43.00.14';
    return $content;
}

// Ajouter les Google Fonts
add_action('wp_enqueue_scripts', 'bdt_enqueue_fonts');
function bdt_enqueue_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Montserrat:wght@400;600;700&display=swap', array(), null);
}
