<?php

/**
 * Title: Home: Writings
 * Slug: whoami/home-writings
 * Categories: whoami
 * Block Types: core/pattern
 * Inserter: true
 */

?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section id="writings" class="wp-block-group">
    <!-- wp:spacer {"height":"40px"} -->
    <div style="height: 40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"30px"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis: 25%">
            <!-- wp:heading {"textAlign":"right","style":{"typography":{"textTransform":"uppercase"}},"textColor":"wmi-primary","fontSize":"4xl"} -->
            <h2 class="wp-block-heading has-text-align-right has-wmi-primary-color has-text-color has-4-xl-font-size" style="text-transform: uppercase"><a href="/blog"> Writings </a></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column">
            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"backgroundColor":"wmi-primary"} -->
            <hr class="wp-block-separator has-text-color has-wmi-primary-color has-alpha-channel-opacity has-wmi-primary-background-color has-background" style="margin-top: 20px; margin-bottom: 20px" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"20px"} -->
    <div style="height: 20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:query {"queryId":31,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
    <div class="wp-block-query">
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignfull" style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
            <!-- wp:post-template {"style":{"typography":{"textTransform":"none"}},"layout":{"type":"default","columnCount":3}} -->
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"25%"} -->
                <div class="wp-block-column" style="flex-basis: 25%">
                    <!-- wp:post-date {"textAlign":"right","format":"F Y","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"wmi-primary"} /-->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column">
                    <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fit"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"24px"}},"textColor":"wmi-heading"} /-->

                    <!-- wp:spacer {"height":"10px"} -->
                    <div style="height: 10px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:post-terms {"term":"category"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:spacer {"height":"20px"} -->
            <div style="height: 20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height: 50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</section>
<!-- /wp:group -->