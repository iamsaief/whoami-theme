<?php

/**
 * Title: Comments: Single pages and Comments enabled
 * Slug: whoami/single-comments
 * Categories: whoami
 * Block Types: core/pattern
 * Inserter: true
 */

?>

<!-- wp:comments {"tagName":"section","style":{"spacing":{"margin":{"top":"100px"}}}} -->
<section class="wp-block-comments" style="margin-top: 100px">
    <!-- wp:comments-title {"showPostTitle":false,"showCommentsCount":false} /-->

    <!-- wp:comment-template {"style":{"spacing":{"margin":{"bottom":"50px"}}}} -->
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height: 25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:avatar {"size":30,"style":{"border":{"radius":"50%"}}} /-->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"sm"} -->
        <div class="wp-block-group has-sm-font-size">
            <!-- wp:comment-author-name /-->

            <!-- wp:paragraph -->
            <p>|</p>
            <!-- /wp:paragraph -->

            <!-- wp:comment-date /-->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:comment-reply-link /-->

                <!-- wp:comment-edit-link /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"15px"} -->
    <div style="height: 15px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:comment-content /-->
    <!-- /wp:comment-template -->

    <!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
    <!-- wp:comments-pagination-previous /-->

    <!-- wp:comments-pagination-numbers /-->

    <!-- wp:comments-pagination-next /-->
    <!-- /wp:comments-pagination -->

    <!-- wp:post-comments-form {"textAlign":"left","style":{"spacing":{"margin":{"top":"80px","bottom":"30px"}}}} /-->
</section>
<!-- /wp:comments -->