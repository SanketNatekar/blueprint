<?php
/**
 * Title: Right 4 media and list
 * Slug: nexal/right-4-media-and-list
 * Categories: banner, nexal, call-to-action, about
 */
?>
<!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Right 4 media and list"},"ploverBlockID":"0dd73839-457f-4013-8de2-046f1f3cd153","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
    <!-- wp:column {"verticalAlignment":"center","ploverBlockID":"a90d855e-3983-421c-84dd-cf7b5447c608","cssOrder":{"desktop":1,"tablet":0,"mobile":"__INITIAL_VALUE__"}} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:columns {"isStackedOnMobile":false,"ploverBlockID":"3e6cddff-582f-49c6-8114-68ddd3e15b6e","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
        <div class="wp-block-columns is-not-stacked-on-mobile"
            style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:column {"ploverBlockID":"3a2467ea-6ef3-4266-88ab-4a877f2b64c8"} -->
            <div class="wp-block-column">
                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"5089ae31-000a-4fb6-9695-d57c3e866bdd"} -->
                <figure class="wp-block-image size-full"><img
                        src="<?php the_nexal_asset_url('images/featured-02.jpg') ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"d6bd7e56-6310-4431-b0ff-252934cdb36b"} -->
                <figure class="wp-block-image size-full"><img
                        src="<?php the_nexal_asset_url('images/destination-01.jpg') ?>" alt=""/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"ploverBlockID":"b2ba2283-2f33-4c04-92de-dab38b30914f"} -->
            <div class="wp-block-column">
                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"7a7b75e4-a478-4107-95ee-b9afae36515e"} -->
                <figure class="wp-block-image size-full"><img
                        src="<?php the_nexal_asset_url('images/featured-03.jpg') ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"fc99ea72-319a-43de-bfcd-219c0562da1a"} -->
                <figure class="wp-block-image size-full"><img
                        src="<?php the_nexal_asset_url('images/featured-04.jpg') ?>" alt=""/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","ploverBlockID":"ff9f4220-4f9c-4b24-94df-d20f2db40e04"} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:group {"ploverBlockID":"fa4a8547-f965-486f-8f11-67d8d0c9df51","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"
            style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:group {"ploverBlockID":"8f5193e1-f752-46a8-ad94-077d70a38a34","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"ploverBlockID":"b789aa35-5dfa-4e29-bbe5-c14ddb004890","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1.2px"},"elements":{"link":{"color":{"text":"var:preset|color|primary-color"}}}},"textColor":"primary-color"} -->
                <p class="has-primary-color-color has-text-color has-link-color"
                    style="font-size:14px;font-style:normal;font-weight:700;letter-spacing:1.2px;text-transform:uppercase"><?php esc_html_e('exclusive', 'nexal') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"ploverBlockID":"65e17dc6-8985-418c-8acc-46fd3149a060","style":{"typography":{"textTransform":"capitalize"}}} -->
                <h2 class="wp-block-heading" style="text-transform:capitalize"><?php esc_html_e('What makes us sparkle', 'nexal') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:list {"ploverBlockID":"cc1ee3ae-c82e-4e7c-96e3-04f875f4c870","className":"is-style-check-circle","style":{"spacing":{"blockGap":"4px","padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
            <ul style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)"
                class="wp-block-list is-style-check-circle">
                <!-- wp:list-item {"ploverBlockID":"9800a0af-ae24-412a-a944-81e62e13b692"} -->
                <li><?php esc_html_e('Custom Itineraries', 'nexal') ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"ploverBlockID":"a2527680-dcad-4743-a6ab-9e7af216d9d0"} -->
                <li><?php esc_html_e('Workshops and Masterclasses', 'nexal') ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"ploverBlockID":"0c1e6aac-9e14-499a-af6e-6b58b37883b8"} -->
                <li><?php esc_html_e('Professional Photographers', 'nexal') ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"ploverBlockID":"67968267-a527-4b82-ad99-4ef55926a6c6"} -->
                <li><?php esc_html_e('Social Media Integration', 'nexal') ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons {"ploverBlockID":"3fed84fd-ab6d-4041-be97-8f4d4e5861ae"} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"ploverBlockID":"4b64465a-55a5-4601-b830-c901fbec1ee1","style":{"typography":{"letterSpacing":"1.2px","textTransform":"uppercase"}}} -->
                <div class="wp-block-button" style="letter-spacing:1.2px;text-transform:uppercase"><a
                        class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Get Started', 'nexal') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
