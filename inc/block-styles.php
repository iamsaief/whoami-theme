<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */
if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @return void
     */
    function whoami_register_block_styles() {

        // Buttons - has icon
        register_block_style(
            'core/buttons',
            array(
                'name'         => THEME_PFX . '-has-icon',
                'label'        => __('With Icon', 'whoami'),
            )
        );

        // Button small
        register_block_style(
            'core/button',
            array(
                'name'         => 'sm',
                'label'        => __('Small', 'whoami'),
                'inline_style' => '
					.wp-block-button.is-style-sm .wp-block-button__link {
						padding-block: 12px;
					}
				',
            )
        );

        // Button - link
        register_block_style(
            'core/button',
            array(
                'name'         => 'link',
                'label'        => __('Link', 'whoami'),
                'inline_style' => '
                        .wp-block-buttons .is-style-link .wp-block-button__link {
                            color: inherit;
                            background: transparent;
                        }
                    ',
            )
        );

        // List 
        register_block_style(
            'core/list',
            array(
                'name'         => 'has-icon',
                'label'        => __('Icon List', 'brutal-wp'),
            )
        );
    }

    add_action('init', 'whoami_register_block_styles');
}
