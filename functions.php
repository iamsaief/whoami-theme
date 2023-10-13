<?php


const THEME_SLUG         = 'whoami';
const THEME_PFX         = 'wmi';
const THEME_DIR         = __DIR__;

require_once THEME_DIR . '/inc/tgm/tgmpa-config.php';
require_once THEME_DIR . '/inc/block-styles.php';

/**
 * Enqueue the CSS,JS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function whoami_styles_scripts() {
    // CSS
    wp_enqueue_style('whoami-theme', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
    wp_enqueue_style('whoami-index', get_template_directory_uri() . '/dist/index.css', [], wp_get_theme()->get('Version'));

    // JS
    wp_enqueue_script('whoami-index', get_template_directory_uri() . '/dist/index.js', [], wp_get_theme()->get('Version'), true);


    // on single post
    if (is_single()) {
        // prism.css and prism.js to the site
        wp_enqueue_style('prismCSS', get_template_directory_uri() . '/assets/css/prism.css');
        wp_enqueue_script('prismJS', get_template_directory_uri() . '/assets/js/prism.js');
        wp_enqueue_script('mathjax', 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js');
    }
}
add_action('wp_enqueue_scripts', 'whoami_styles_scripts');

/**
 * Enqueue the CSS,JS files on block editor.
 *
 * @since 1.0.0
 *
 * @return void
 */
function whoami_editor_styles_scripts() {
    // CSS

    // JS
}
add_action('enqueue_block_editor_assets', 'whoami_editor_styles_scripts');


/**
 * Register pattern categories
 *
 * @since 1.0.0
 *
 * @return void
 */

if (function_exists('register_block_pattern_category')) {
    function whoami_register_pattern_categories() {
        register_block_pattern_category(
            'whoami',
            array(
                'label' => __('Whoami', 'whoami'),
                'description' => __('Theme Specific Patterns', 'whoami'),
            )
        );
    }
}

add_action('init', 'whoami_register_pattern_categories');
