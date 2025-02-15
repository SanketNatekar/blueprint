<?php
/**
 * Title: Heading text and bottom media
 * Slug: nexal/heading-text-and-bottom-media
 * Categories: nexal, banner, features, about
 */
?>
<!-- wp:group {"metadata":{"name":"Heading text and bottom media"},"ploverBlockID":"e2070fca-48e7-4099-9a78-abe605086ad2","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"backgroundColor":"neutral-0","textColor":"neutral-950","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-neutral-950-color has-neutral-0-background-color has-text-color has-background has-link-color"
    style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:columns {"verticalAlignment":"center","ploverBlockID":"ce362b77-6ceb-4d7b-98bc-fb21a3607558","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","ploverBlockID":"e6795525-d780-48e3-8863-f6ec9a60404b"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:group {"ploverBlockID":"eddca256-b8ab-4b89-b3a4-e3d2aea73914","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:group {"ploverBlockID":"00f3403d-1555-425a-afa1-0a69cda6b1c7","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"ploverBlockID":"49e30634-3532-46b2-a680-f5c83b3cfdfd","style":{"typography":{"textTransform":"capitalize","lineHeight":"1.4"}}} -->
                    <h2 class="wp-block-heading" style="line-height:1.4;text-transform:capitalize"><?php esc_html_e('Tailored Travel Itineraries', 'nexal') ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","ploverBlockID":"f422c65d-f191-433c-8808-5f16adea52a7"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:paragraph {"ploverBlockID":"fb017950-8a01-4849-b92e-5041b3835554","style":{"border":{"left":{"color":"var:preset|color|primary-color","width":"4px"}},"spacing":{"padding":{"left":"var:preset|spacing|small"}}}} -->
            <p style="border-left-color:var(--wp--preset--color--primary-color);border-left-width:4px;padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e("Whether you're seeking adventure, relaxation, or cultural immersion, we design a travel plan that ensures you make the most of your journey.", 'nexal') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:cover {"url":"<?php the_nexal_asset_url('images/banner-02.jpg') ?>","dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":350,"minHeightUnit":"px","ploverBlockID":"f89cfb76-1a07-47af-a512-a59b80e82f6a","align":"wide","style":{"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignwide" style="border-radius:16px;min-height:350px"><span aria-hidden="true"
            class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
            class="wp-block-cover__image-background" alt=""
            src="<?php the_nexal_asset_url('images/banner-02.jpg') ?>"
            style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"align":"center","placeholder":"Write title…","ploverBlockID":"5b1810a4-69e3-4b32-b19e-17b3e4bbd762","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->
