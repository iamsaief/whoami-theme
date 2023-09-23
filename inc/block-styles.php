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

        // Tables - no outer border
        register_block_style(
            'core/table',
            array(
                'name'         => THEME_PFX . '-no-outer-border',
                'label'        => __('No Outer Border', 'whoami'),
                'inline_style' => '
                    .wp-block-table.is-style-' . THEME_PFX . '-no-outer-border table {
                        border: unset;
                    }
                    .wp-block-table.is-style-' . THEME_PFX . '-no-outer-border table td {
                        border-style: solid !important;
                        border-width: initial !important;
                        border-color: inherit !important;
                    }
                    .wp-block-table.is-style-' . THEME_PFX . '-no-outer-border td {
                        border-style: solid !important;
                        border-width: initial !important;
                    }
                    .wp-block-table.is-style-' . THEME_PFX . '-no-outer-border tr:first-child td {
                        border-top: none !important;
                    }
                    .wp-block-table.is-style-' . THEME_PFX . '-no-outer-border tr:last-child td {
                        border-bottom: none !important;
                    }
                    .wp-block-table.is-style-' . THEME_PFX . '-no-outer-border tr td:first-child {
                        border-left: none !important;
                    }
                    .wp-block-table.is-style-' . THEME_PFX . '-no-outer-border tr td:last-child {
                        border-right: none !important;
                    }'
            )
        );

        // List 
        register_block_style(
            'core/list',
            array(
                'name'         => THEME_PFX . '-has-emoji',
                'label'        => __('Emoji List', 'whoami'),
                'inline_style' => '
                    ul.is-style-' . THEME_PFX . '-has-emoji {
                        padding-left: 0;
                        display: grid;
                        gap: 10px;
                    }
                    ul.is-style-' . THEME_PFX . '-has-emoji li {
                        display: flex;
                        gap: 5px;
                    }
                    ul.is-style-' . THEME_PFX . '-has-emoji li::before {
                        content: "⚡️";
                    }'
            )
        );

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
    }

    add_action('init', 'whoami_register_block_styles');
}
