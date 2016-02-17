<?php
/**
 * @file
 * Stub file for "page" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function ekc_bootstrap_preprocess_page(&$variables) {
    // Set column widths
    if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
        $variables['content_column_class'] = ' class="col-sm-6 col-sm-pull-3"';
        $variables['sidebar_first_column_class'] = ' class="col-sm-3 col-sm-push-6"';
        $variables['sidebar_second_column_class'] = ' class="col-sm-3"';
    }
    elseif (!empty($variables['page']['sidebar_first']) && empty($variables['page']['sidebar_second'])) {
        $variables['content_column_class'] = ' class="col-sm-9 col-sm-pull-3"';
        $variables['sidebar_first_column_class'] = ' class="col-sm-3 col-sm-push-9"';
        $variables['sidebar_second_column_class'] = ' class="col-sm-3"';
    }
    elseif (empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
        $variables['content_column_class'] = ' class="col-sm-9"';
        $variables['sidebar_first_column_class'] = ' class="col-sm-3"';
        $variables['sidebar_second_column_class'] = ' class="col-sm-3"';
    }
    else {
        $variables['content_column_class'] = ' class="col-sm-12"';
    }

    //  Redirect 404 and 403
    $header = drupal_get_http_header("status");
    if ($header == "404 Not Found") {
      $variables['theme_hook_suggestions'][] = 'page__404';
    }
    elseif ($header == "403 Forbidden") {
      $variables['theme_hook_suggestions'][] = 'page__403';
    }

    //  Update hook_suggestions for Audio Files
    if (isset($variables['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
      $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
    }
}