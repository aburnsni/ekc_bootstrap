<?php

/**
 * Implements hook_panels_layouts()
 */
function ekc_bootstrap_2col_8_4_panels_layouts() {
  $items['2col_8_4'] = array(
    'title' => t('2 column 8 4'),
    'category' => t('Custom Layouts'),
    'icon' => '2col_8_4.png',
    'theme' => '2col_8_4',
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

