<?php

/**
 * Implements hook_panels_layouts()
 */
function ekc_bootstrap_2col_panels_layouts() {
  $items['2col'] = array(
    'title' => t('2 column'),
    'category' => t('Custom Layouts'),
    'icon' => '2col.png',
    'theme' => '2col',
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

