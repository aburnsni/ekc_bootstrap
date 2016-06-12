<?php

/**
 * Implements hook_panels_layouts()
 */
function ekc_bootstrap_2col_bricks_panels_layouts() {
  $items['2col_bricks'] = array(
    'title' => t('2 column bricks'),
    'category' => t('Custom Layouts'),
    'icon' => '2col_bricks.png',
    'theme' => '2col_bricks',
    //'css' => 'panel-cusom.css', // Optional CSS
    'regions' => array(
      'top' => t('Top'),
      'left_above' => t('Above Left'),
      'right_above' => t('Above Right'),
      'middle' => t('Middle'),
      'left_below' => t('Below Left'),
      'right_below' => t('Below Right'),
      'bottom' => t('Bottom'),
    ),
  );
  return $items;
}

