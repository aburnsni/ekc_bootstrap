<?php

/**
 * Implements hook_panels_layouts()
 */
function ekc_bootstrap_2col_75_25_panels_layouts() {
  $items['2col_75_25'] = array(
    'title' => t('2 column 75 25'),
    'category' => t('Custom Layouts'),
    'icon' => '2col_75_25.png',
    'theme' => '2col_75_25',
    //'css' => 'panel-cusom.css', // Optional CSS
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
      'bottom' => t('Bottom'),
    ),
  );
  return $items;
}

