<?php

/**
 * Title: Footer
 * Slug: whoami/footer
 * Categories: whoami
 * Block Types: core/template-part
 *
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-bottom:20px">
    <!-- wp:spacer {"height":"30px"} -->
    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:social-links {"iconColor":"wmi-body-text","iconColorValue":"hsl(0deg 0% 10.2%)","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"20px"}}},"className":"is-style-logos-only hide-on-desktop","layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only hide-on-desktop">
        <!-- wp:social-link {"url":"#","service":"github"} /-->

        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

        <!-- wp:social-link {"url":"#","service":"codepen"} /-->

        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
    </ul>
    <!-- /wp:social-links -->

    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"2px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="line-height:1"><!-- wp:paragraph -->
        <p>©</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"copyright-year"} -->
        <p class="copyright-year">2023</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><a href="/contact">Saief</a></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph -->
            <p> I </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>build with</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"left","className":"emoji","fontSize":"xs"} -->
            <p class="has-text-align-left emoji has-xs-font-size">❤️</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>WordPress</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->