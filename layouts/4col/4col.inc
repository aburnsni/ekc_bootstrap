<?php

/**
 * Implements hook_panels_layouts()
 */
function ekc_bootstrap_4col_panels_layouts() {
  $items['4col'] = array(
    'title' => t('4 column'),
    'category' => t('Custom Layouts'),
    'icon' => '4col.png',
    'theme' => '4col',
    //'css' => 'panel-cusom.css', // Optional CSS
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'third' => t('Third'),
      'fourth' => t('Fourth'),
      'bottom' => t('Bottom'),
    ),
  );
  return $items;
}

