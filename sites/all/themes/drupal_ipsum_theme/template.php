<?php

/**
 * @file Drupal Ipsum Theme template hooks
 */

function drupal_ipsum_theme_preprocess_html(&$vars) {
  $vars[ 'head_title_array']['title'] = 'Generate Drupal-flavoured lorem ipsum';
  $vars['head_title'] = $vars[ 'head_title_array']['title'] . ' | ' . $vars[ 'head_title_array']['name'];
}