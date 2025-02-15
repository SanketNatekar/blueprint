<?php
/**
 * Title: Header with video background
 * Slug: nexal/header-with-video-background
 * Categories: nexal, header, banner
 * Block Types: core/template-part/header
 */
?>

<!-- wp:cover {"url":"<?php the_nexal_asset_url('videos/header-background.mp4') ?>","dimRatio":60,"customOverlayColor":"#060928","isUserOverlayColor":true,"backgroundType":"video","minHeight":100,"minHeightUnit":"vh","contentPosition":"top center","metadata":{"name":"Header with video background"},"ploverBlockID":"0dfa166e-a2d1-41b2-8650-03f9e2ee307e","className":"is-style-dark","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"}}},"color":{"duotone":"unset"}},"textColor":"neutral-950"} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center is-style-dark has-neutral-950-color has-text-color has-link-color"
    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-60 has-background-dim"
        style="background-color:#060928"></span><video class="wp-block-cover__video-background intrinsic-ignore"
        autoplay muted loop playsinline src="<?php the_nexal_asset_url('videos/header-background.mp4') ?>"
        data-object-fit="cover"></video>
    <div class="wp-block-cover__inner-container">
        <!-- wp:template-part {"slug":"header-transparent","tagName":"header","area":"header","align":"full"} /-->

        <!-- wp:group {"metadata":{"name":"Hero Content"},"ploverBlockID":"e849c0a5-feac-4a57-ab67-e7a00834fb86","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"
            style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
            <!-- wp:spacer {"height":"24px","ploverBlockID":"8d5287f0-5ce7-4176-b29e-a0a81860e285"} -->
            <div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"ploverBlockID":"c6fd963e-9c19-4e66-ae17-7e3e45aeb09e","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:heading {"textAlign":"center","level":1,"ploverBlockID":"969f476a-a1fb-427d-82b4-58c94aa09e80","align":"wide","style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontSize":"5rem"}}} -->
                <h1 class="wp-block-heading alignwide has-text-align-center"
                    style="font-size:5rem;line-height:1.4;text-transform:capitalize"><?php esc_html_e('Travel. Capture. Share', 'nexal') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","ploverBlockID":"6740ab2a-dbae-455f-8bd0-e31a9ace718c","style":{"elements":{"link":{"color":{"text":"#ffffffad"}}},"color":{"text":"#ffffffad"},"typography":{"fontSize":"16px"}}} -->
                <p class="has-text-align-center has-text-color has-link-color" style="color:#ffffffad;font-size:16px"><?php esc_html_e('Discover the beauty of our planet through the lens of your camera. Our platform invites you to explore breathtaking landscapes, vibrant cultures, and unforgettable moments.', 'nexal') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"ploverBlockID":"ea2c936d-b5c6-4ecd-b0ea-d2dfd91cf9fe","layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"ploverBlockID":"42debf2c-8b83-47e8-843a-c1814f1a4863","className":"is-style-ghost","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"left":"18px","right":"18px","top":"14px","bottom":"14px"}}},"fontSize":"x-small","iconLibrary":"plover-core","iconSlug":"arrow-up-right","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022\u003e\u003cline x1=\u00227\u0022 y1=\u002217\u0022 x2=\u002217\u0022 y2=\u00227\u0022\u003e\u003c/line\u003e\u003cpolyline points=\u00227 7 17 7 17 17\u0022\u003e\u003c/polyline\u003e\u003c/svg\u003e"} -->
                <div class="wp-block-button has-custom-font-size is-style-ghost has-x-small-font-size"
                    style="letter-spacing:1px;text-transform:uppercase"><a
                        class="wp-block-button__link wp-element-button"
                        style="padding-top:14px;padding-right:18px;padding-bottom:14px;padding-left:18px"><?php esc_html_e('Learn more', 'nexal') ?></a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"ploverBlockID":"4991176d-ae46-4205-8ecc-85a7e927aeee","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"left":"18px","right":"18px","top":"14px","bottom":"14px"}}},"fontSize":"x-small","iconLibrary":"plover-core","iconSlug":"arrow-up-right","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022\u003e\u003cline x1=\u00227\u0022 y1=\u002217\u0022 x2=\u002217\u0022 y2=\u00227\u0022\u003e\u003c/line\u003e\u003cpolyline points=\u00227 7 17 7 17 17\u0022\u003e\u003c/polyline\u003e\u003c/svg\u003e"} -->
                <div class="wp-block-button has-custom-font-size has-x-small-font-size"
                    style="letter-spacing:1px;text-transform:uppercase"><a
                        class="wp-block-button__link wp-element-button"
                        style="padding-top:14px;padding-right:18px;padding-bottom:14px;padding-left:18px"><?php esc_html_e('Join today', 'nexal') ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:spacer {"height":"81px","ploverBlockID":"cc08f4ae-c8f2-4047-9387-46327a990378"} -->
            <div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->