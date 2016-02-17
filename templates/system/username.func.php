<?php
/**
 * @file
 * Stub file for username_alter() and suggestion(s).
 */

function ekc_bootstrap_username_alter(&$name, $account) {
  // Display the user's uid instead of name.
  //if (isset($account->uid)) {
  //  $name = t('User !uid', array('!uid' => $account->uid));
  //}
  $name = html_entity_decode($account->name, ENT_QUOTES);
}
