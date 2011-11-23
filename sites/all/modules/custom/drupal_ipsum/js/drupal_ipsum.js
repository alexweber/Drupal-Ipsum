jQuery(document).ready(function($){
  var $link = $('a.drupal_ipsum_select');

  if ($link.length) {
    $link.click(function(){
      
      var $text = $('div.drupal_ipsum_text'),
      $textarea = $('textarea.drupal_ipsum_textarea');
      
      if ($text.is(':visible')) {
        $text.hide();
        $textarea.show().get(0).select();
        $(this).text(Drupal.t('Select none'));
      } else {
        $text.show();
        $textarea.hide()
        $(this).text(Drupal.t('Select all'));
      }
    });
  }
});