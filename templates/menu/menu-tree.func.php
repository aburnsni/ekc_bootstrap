<?php
/**
 * @file
 * Stub file for bootstrap_menu_tree() and suggestion(s).
 */

/**
 * Add navbar classes to menu tree
 */
function ekc_bootstrap_menu_tree__main_menu($variables) {
       return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
}

/**
 * Add group classes to departments submnenu
 */
function ekc_bootstrap_menu_tree__menu_block__1($variables) {
       return '<ul class="nav nav-pills nav-stacked">' . $variables['tree'] . '</ul>';
}

/**
 * Add group classes to parents menublock
 */
function ekc_bootstrap_menu_tree__menu_block__2($variables) {
    return '<div class="list-group">' . $variables['tree'] . '</div>';
}
/**
 * Add group classes to "Add Content" menublock
 */
function ekc_bootstrap_menu_tree__menu_block__3($variables) {
    return '<div class="list-group">' . $variables['tree'] . '</div>';
}

/**
 * Add group classes to User menublock
 */
function ekc_bootstrap_menu_tree__user_menu($variables) {
    return '<ul class="nav nav-pills nav-stacked">' . $variables['tree'] . '</ul>';
}