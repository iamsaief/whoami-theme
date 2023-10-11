<?php

/**
 * Title: Header Small
 * Slug: whoami/header-small
 * Categories: whoami
 * Block Types: core/template-part
 *
 */

/*
<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
    <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'whoami'); ?>","url":"/blog","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e('Projects', 'whoami'); ?>","url":"/projects","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'whoami'); ?>","url":"/contact","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-bottom:10px">
    <!-- wp:navigation {"overlayMenu":"always","layout":{"type":"flex","justifyContent":"right","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->

    <!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'whoami'); ?>","url":"/","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'whoami'); ?>","url":"/blog","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php esc_html_e('Projects', 'whoami'); ?>","url":"/projects","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'whoami'); ?>","url":"/contact","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:social-links {"iconColor":"wmi-heading","iconColorValue":"hsl(0deg 0% 100% / 90%)","style":{"spacing":{"blockGap":{"left":"20px"}}},"className":"is-style-logos-only hide-on-mobile","layout":{"type":"flex","justifyContent":"right"}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only hide-on-mobile"><!-- wp:social-link {"url":"#","service":"github"} /-->

        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

        <!-- wp:social-link {"url":"#","service":"codepen"} /-->

        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
    </ul>
    <!-- /wp:social-links -->
    <!-- /wp:navigation -->
</div>
<!-- /wp:group -->