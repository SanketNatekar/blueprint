<?php
/**
 * Title: Left media and text
 * Slug: nexal/left-media-and-text
 * Categories: banner, nexal, call-to-action, about
 */
?>
<!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Left media and text"},"ploverBlockID":"4689d801-54be-4b7d-a62a-46034b03208f","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
    <!-- wp:column {"verticalAlignment":"center","ploverBlockID":"2967e493-e394-4ca3-9a57-67433fc92eaa"} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"7f51ecde-ea6a-4450-90c3-fc3d3da44cb6"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php the_nexal_asset_url('images/featured-01.jpg') ?>" alt="" />
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","ploverBlockID":"b81087d7-a6e4-4bad-8e0d-5e1f9e855e91"} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:group {"ploverBlockID":"8b01670c-2528-4a82-9850-d0616b441b0d","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"
            style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:group {"ploverBlockID":"66634edd-b233-4c2b-b585-cf48a2a08077","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"ploverBlockID":"486d71e6-807c-423e-aabe-12c683ac4fb4","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1.2px"},"elements":{"link":{"color":{"text":"var:preset|color|primary-color"}}}},"textColor":"primary-color"} -->
                <p class="has-primary-color-color has-text-color has-link-color"
                    style="font-size:14px;font-style:normal;font-weight:700;letter-spacing:1.2px;text-transform:uppercase"><?php esc_html_e('about', 'nexal') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"ploverBlockID":"42935d17-1951-4a4c-b266-686288a96865","style":{"typography":{"textTransform":"capitalize","lineHeight":"1.4"}}} -->
                <h2 class="wp-block-heading" style="line-height:1.4;text-transform:capitalize"><?php esc_html_e('Photography Workshops and Travel Retreats', 'nexal') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"ploverBlockID":"54632ae0-b8ac-4e70-ba1c-8d9b83db15e4"} -->
            <p><?php esc_html_e('Join our photography workshops and travel retreats to enhance your skills while exploring new destinations. Led by experienced photographers, these immersive experiences combine hands-on learning with travel, allowing you to practice your craft in inspiring environments and connect with fellow photography enthusiasts.', 'nexal') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"ploverBlockID":"bd908e60-ba85-4c1b-9e8c-412d79e4b615"} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"ploverBlockID":"06b9c43f-b23a-4812-a68e-1b23986f9f71","style":{"typography":{"letterSpacing":"1.2px","textTransform":"uppercase"}}} -->
                <div class="wp-block-button" style="letter-spacing:1.2px;text-transform:uppercase"><a
                        class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Learn more', 'nexal') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->