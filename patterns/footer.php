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
<div class="wp-block-group" style="padding-top:20px;padding-bottom:20px"><!-- wp:spacer {"height":"30px"} -->
    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:paragraph -->
            <p>©</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"copyright-year"} -->
            <p class="copyright-year">2023</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><a href="/">Jhon Doe</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:social-links {"iconColor":"wmi-border","iconColorValue":"hsl(0 0% 95% / 1)","className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
        <!-- /wp:social-links -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"},"typography":{"lineHeight":"1.2"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group" style="line-height:1.2"><!-- wp:paragraph {"fontSize":"sm"} -->
            <p class="has-sm-font-size">build with</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"left","className":"emoji","fontSize":"xs"} -->
            <p class="has-text-align-left emoji has-xs-font-size">❤️</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"fontSize":"sm"} -->
            <p class="has-sm-font-size">By <a href="/">Jhno Deo</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->