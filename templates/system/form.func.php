<?php
/**
 * @file
 * Stub file for bootstrap_form_alter()
 */

function ekc_bootstrap_form_alter(&$form, &$form_state, $form_id) {
//  print '<pre>';
//    print_r($form);
//    print '</pre>';
//    dpm($form);
//    $form['keys_1']['#attributes']['placeholder'] = "Search...";

//  Add inline-form class to masquerade block for bootstrap themeing
  if ($form_id == 'masquerade_block_1') {
    if (!isset($form['#attributes']['class'])) {
      $form['#attributes'] = array('class' => array('form-inline'));
    }
    else {
      $form['#attributes']['class'][] = 'form-inline';

    }
  }
}
