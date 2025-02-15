<?php
/**
 * Title: Featured call to action grid
 * Slug: nexal/featured-call-to-action-grid
 * Categories: features, nexal, call-to-action, about
 */
?>
<!-- wp:group {"metadata":{"name":"Featured call to action grid"},"ploverBlockID":"7022a845-c198-462e-a2d1-2dc45d58fec6","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"}}}},"backgroundColor":"neutral-0","textColor":"neutral-950","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-neutral-950-color has-neutral-0-background-color has-text-color has-background has-link-color"
    style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:cover {"url":"<?php the_nexal_asset_url('images/banner-03.jpg') ?>","dimRatio":30,"customOverlayColor":"#0b0b0b","isUserOverlayColor":true,"minHeight":488,"minHeightUnit":"px","ploverBlockID":"7dd43d7c-f5a1-4659-abd8-ab8887929552","align":"wide","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"border":{"radius":"12px"},"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignwide is-style-default has-text-color has-link-color"
        style="border-radius:12px;color:#fffffe;min-height:488px"><span aria-hidden="true"
            class="wp-block-cover__background has-background-dim-30 has-background-dim"
            style="background-color:#0b0b0b"></span><img class="wp-block-cover__image-background" alt=""
            src="<?php the_nexal_asset_url('images/banner-03.jpg') ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"metadata":{"name":"Heading and description"},"ploverBlockID":"41547b3d-ae5c-45d4-b465-b86a944cd044","align":"wide","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:heading {"textAlign":"center","ploverBlockID":"edf1e675-6264-4779-adf1-f24755e15566","align":"wide","style":{"typography":{"textTransform":"none"}}} -->
                <h2 class="wp-block-heading alignwide has-text-align-center" style="text-transform:none"><?php esc_html_e('Time to Start Your Journey', 'nexal') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","ploverBlockID":"e80fbda1-b833-4108-8bc3-7dc3c370c580"} -->
                <p class="has-text-align-center"><?php esc_html_e('Embrace the chance to discover diverse landscapes, taste new cuisines, and connect with people from different backgrounds.', 'nexal') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"ploverBlockID":"f89bd66a-18f3-462c-b7f9-d4e1263d931e","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-800"}}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"6px"}},"backgroundColor":"neutral-0","textColor":"neutral-800","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group has-neutral-800-color has-neutral-0-background-color has-text-color has-background has-link-color"
                style="border-radius:6px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"ploverBlockID":"c2d19ef2-89c2-412f-833a-911b65dc5e28","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                <p style="font-style:normal;font-weight:600"><?php esc_html_e('Start your journey today!', 'nexal') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"ploverBlockID":"50d4ee65-b0c8-454f-82b9-227a4de9002a"} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"ploverBlockID":"ba93ee21-429d-44e5-9f40-0af5918b27b7","className":"is-style-fill","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.2px"},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"iconLibrary":"plover-core","iconSlug":"arrow-up-right","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022\u003e\u003cline x1=\u00227\u0022 y1=\u002217\u0022 x2=\u002217\u0022 y2=\u00227\u0022\u003e\u003c/line\u003e\u003cpolyline points=\u00227 7 17 7 17 17\u0022\u003e\u003c/polyline\u003e\u003c/svg\u003e"} -->
                    <div class="wp-block-button is-style-fill" style="letter-spacing:1.2px;text-transform:uppercase">
                        <a
                            class="wp-block-button__link wp-element-button"
                            style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"
                            ><?php esc_html_e('Book a trip', 'nexal') ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"ploverBlockID":"9bc59e3b-29a9-464d-9d97-b81a8ea4f0f5","align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"ploverBlockID":"a545d7b6-160c-4ebc-8946-094ec2ba2223","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}},"border":{"radius":"12px"}},"gradient":"primary"} -->
        <div class="wp-block-column has-primary-gradient-background has-text-color has-background has-link-color"
            style="border-radius:12px;color:#fffffe;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
            <!-- wp:heading {"level":3,"ploverBlockID":"06e42a0c-a342-415d-972e-09e66dd696f1","fontSize":"2-x-large"} -->
            <h3 class="wp-block-heading has-2-x-large-font-size"><?php esc_html_e('Contact Support', 'nexal') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"ploverBlockID":"46b3d741-bea5-4049-926c-ab95a26c05ce"} -->
            <p><?php esc_html_e('If you have any questions feel free to contact our support and we will get back to you within 24 hours.', 'nexal') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"ploverBlockID":"0d0c925f-9848-412b-b67b-bf0be96e6df8","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}}} -->
            <p style="font-style:normal;font-weight:600;line-height:1">support@example.com</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"ploverBlockID":"95be59ad-635d-4a67-88e9-a8d241172f86","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}},"border":{"radius":"12px"}},"backgroundColor":"neutral-200","textColor":"neutral-950"} -->
        <div class="wp-block-column has-neutral-950-color has-neutral-200-background-color has-text-color has-background has-link-color"
            style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
            <!-- wp:heading {"level":3,"ploverBlockID":"c583077a-f194-49ed-a408-42d0928ebaf1","fontSize":"2-x-large"} -->
            <h3 class="wp-block-heading has-2-x-large-font-size"><?php esc_html_e('Travel Stories', 'nexal') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"ploverBlockID":"694f5733-3e8b-49ec-a062-db2f5471c812"} -->
            <p><?php esc_html_e("Whether you're a seasoned traveler or planning your next trip, these tales are sure to ignite your passion for adventure.", 'nexal') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"ploverBlockID":"5729d6e4-ea66-45e8-9546-dcfcf898da36","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|primary-color"},":hover":{"color":{"text":"var:preset|color|primary-active"}}}}}} -->
            <p class="has-link-color" style="font-style:normal;font-weight:600;line-height:1"><a href="#"><?php esc_html_e('Read ↗', 'nexal') ?></a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->