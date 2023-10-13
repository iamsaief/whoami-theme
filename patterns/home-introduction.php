<?php

/**
 * Title: Home: Introduction
 * Slug: whoami/home-introduction
 * Categories: whoami
 * Block Types: core/pattern
 * Inserter: true
 */

require THEME_DIR . '/inc/data.php';

?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section id="introduction" class="wp-block-group">
    <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top">
        <!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis: 25%">
            <!-- wp:spacer {"height":"20px"} -->
            <div style="height: 20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:site-logo {"shouldSyncIcon":true, "width":150,"align":"right","className":"is-style-rounded"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top">

            <!-- wp:heading {"level":1,"textColor":"wmi-heading","fontSize":"5xl"} -->
            <h1 class="wp-block-heading has-wmi-heading-color has-text-color has-5-xl-font-size">Saief Al Emon</h1>
            <!-- /wp:heading -->

            <!-- wp:spacer {"height":"20px"} -->
            <div style="height: 20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph -->
            <p>Front-end developer with 4+ years of experience, passionate about creating engaging, accessible web experiences that delight users and meet business goals. Proficient in HTML, CSS/SCSS, JavaScript, Reactjs, WordPress, and more. Keen eye for UI/UX, typography, spacing. Eager to apply my knowledge and creativity to challenging projects. </p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"10px"} -->
            <div style="height: 10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
            <p id="email" style="margin-top: 0px"><strong>👉 <a href="/contact">contact me!</a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"40px"} -->
    <div style="height: 40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:social-links {"openInNewTab":true,"iconColor":"wmi-body-text","iconColorValue":"hsl(0deg 0% 10.2%)","style":{"spacing":{"blockGap":{"left":"50px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only">
        <?php for ($i = 0; $i < count($social_icons_intro); $i++) : ?>
            <!-- wp:social-link {"url":"<?php echo $social_icons_intro[$i]['url']; ?>","service":"<?php echo $social_icons_intro[$i]['slug']; ?>"} /-->
        <?php endfor; ?>
    </ul>
    <!-- /wp:social-links -->

    <!-- wp:spacer {"height":"40px"} -->
    <div style="height: 40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</section>
<!-- /wp:group -->