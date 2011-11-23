<?php
/**
 * @file Drupal Ipsum results template
 * 
 * Displays generated Drupal Ipsum text
 * 
 * Available variables:
 *  - $drupal_ipsum_text string the generated text
 */
?>
<div class="drupal_ipsum_results_container">
  <a href="javascript:void(0)" class="drupal_ipsum_select" title="<?php echo t('Select all'); ?>"><?php echo t('Select all'); ?></a>
  <div class="drupal_ipsum_text"><?php echo $drupal_ipsum_text; ?></div>
  <textarea class="drupal_ipsum_textarea"><?php echo $drupal_ipsum_text; ?></textarea>
</div>

<div class="drupal_ipsum_results_form">
  <h2><?php echo t('Want more?'); ?></h2>
  <?php $form = drupal_get_form('drupal_ipsum_generate_form'); ?>
  <?php echo drupal_render($form); ?>
</div>