<?php

/**
 * Title: Header
 * Slug: whoami/header
 * Categories: whoami
 * Block Types: core/template-part
 *
 */


/*
<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'whoami'); ?>","url":"/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'whoami'); ?>","url":"/blog","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e('Projects', 'whoami'); ?>","url":"/projects","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'whoami'); ?>","url":"/contact","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
 */
?>

<!-- wp:group {"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"30px","top":"30px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="padding-top:30px;padding-bottom:30px"><!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":60,"shouldSyncIcon":false,"className":"is-style-rounded","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

            <!-- wp:code {"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"300","lineHeight":"1"}},"textColor":"wmi-body-text","fontSize":"3xl"} -->
            <pre class="wp-block-code has-wmi-body-text-color has-text-color has-3-xl-font-size" style="font-style:normal;font-weight:300;line-height:1;text-transform:capitalize"><code><a href="/">&lt;JhonDoe/&gt;</a></code></pre>
            <!-- /wp:code -->
        </div>
        <!-- /wp:group -->

        <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->

        <!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'whoami'); ?>","url":"/","kind":"custom","isTopLevelLink":true} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'whoami'); ?>","url":"/blog","kind":"custom","isTopLevelLink":true} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Projects', 'whoami'); ?>","url":"/projects","kind":"custom","isTopLevelLink":true} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'whoami'); ?>","url":"/contact","kind":"custom","isTopLevelLink":true} /-->

        <!-- wp:social-links {"iconColor":"wmi-body-text","iconColorValue":"hsl(0deg 0% 10.2%)","style":{"spacing":{"blockGap":{"left":"20px"}}},"className":"is-style-logos-only hide-on-desktop","layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only hide-on-desktop"><!-- wp:social-link {"url":"#","service":"github"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"#","service":"codepen"} /-->

            <!-- wp:social-link {"url":"#","service":"facebook"} /-->
        </ul>
        <!-- /wp:social-links -->

        <!-- /wp:navigation -->

        <!-- wp:social-links {"iconColor":"wmi-body-text","iconColorValue":"hsl(0deg 0% 10.2%)","style":{"spacing":{"blockGap":{"left":"20px"}}},"className":"is-style-logos-only hide-on-mobile","layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only hide-on-mobile"><!-- wp:social-link {"url":"#","service":"github"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"#","service":"codepen"} /-->

            <!-- wp:social-link {"url":"#","service":"facebook"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height: 30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->