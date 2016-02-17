<?php
/**
 * @file
 * Stub file for "image" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "image" theme hook.
 *
 * See theme function for list of available variables.
 *
 * @see theme_image()
 *
 * @ingroup theme_preprocess
 */
function ekc_bootstrap_preprocess_image(&$variables) {
	// Add img-circle class to Video/Gallery Thumbnails
    if(isset($variables['style_name'])) {
        if($variables['style_name'] == 'gallery_cover_small') {
            $variables['attributes']['class'][] = "img-circle";
        }
        if($variables['style_name'] == 'node_gallery_thumbnail') {
            $variables['attributes']['class'][] = "img-thumbnail";
        }
		// Add alt text to match Title (if it doesnt't aleady exist)
        if(isset($variables['attributes']['title']) && !$variables['attributes']['alt']) {
            $variables['attributes']['alt'] = $variables['attributes']['title'];
        }
    }
}