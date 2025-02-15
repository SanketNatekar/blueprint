<?php
/**
 * Title: Fixed background subscribe banner
 * Slug: nexal/fixed-background-subscribe-banner
 * Categories: banner, nexal, call-to-action, about
 */
?>
<!-- wp:cover {"url":"<?php the_nexal_asset_url('images/banner-01.jpg') ?>","hasParallax":true,"dimRatio":50,"customOverlayColor":"#070707","isUserOverlayColor":true,"minHeight":380,"minHeightUnit":"px","metadata":{"name":"Fixed background subscribe banner"},"ploverBlockID":"f14577b7-ce09-437e-a34a-855fc6f2fcc8","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-parallax" style="min-height:380px"><span aria-hidden="true"
        class="wp-block-cover__background has-background-dim" style="background-color:#070707"></span>
    <div class="wp-block-cover__image-background has-parallax"
        style="background-position:50% 50%;background-image:url(<?php the_nexal_asset_url('images/banner-01.jpg') ?>)">
    </div>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"metadata":{"name":"Heading and description"},"ploverBlockID":"5ad270c9-73b8-4abb-b2f3-8872e45499b5","align":"wide","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:heading {"textAlign":"center","ploverBlockID":"696cd178-83ab-42e2-9369-7b82cd230821","align":"wide","style":{"typography":{"textTransform":"none"}}} -->
            <h2 class="wp-block-heading alignwide has-text-align-center" style="text-transform:none"><?php esc_html_e('Subscribe Our Newsletter!', 'nexal') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","ploverBlockID":"63425b02-be9f-4793-8af2-6a0495336a23"} -->
            <p class="has-text-align-center"><?php esc_html_e("Don't miss any exciting travel stories and travel promotions! Subscription our newsletter now. Don't worry, we won't bother you too often.", 'nexal') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"ploverBlockID":"2bac3296-1565-41e3-8336-b371f1ee192e","layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"ploverBlockID":"4230722f-2e47-488f-900d-9a7f439e4133","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"left":"18px","right":"18px","top":"14px","bottom":"14px"}}},"fontSize":"x-small","iconLibrary":"plover-core","iconSlug":"plus","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022\u003e\u003cline x1=\u002212\u0022 y1=\u00225\u0022 x2=\u002212\u0022 y2=\u002219\u0022\u003e\u003c/line\u003e\u003cline x1=\u00225\u0022 y1=\u002212\u0022 x2=\u002219\u0022 y2=\u002212\u0022\u003e\u003c/line\u003e\u003c/svg\u003e"} -->
                <div class="wp-block-button has-custom-font-size has-x-small-font-size"
                    style="letter-spacing:1px;text-transform:uppercase">
                    <a
                        class="wp-block-button__link wp-element-button"
                        style="padding-top:14px;padding-right:18px;padding-bottom:14px;padding-left:18px"
                        ><?php esc_html_e('Subscribe now', 'nexal') ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->