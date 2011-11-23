<?php

/**
 * This file is part of Foo Framework.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://foo-project.org/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@foo-project.org so we can send you a copy immediately.
 *
 * @category Foo
 * @package Utils
 * @copyright Copyright (c) 2009-2010, Alex Weber
 * @license http://foo-project.org/license/new-bsd  New BSD License
 * @link http://foo-project.org
 * @since 0.3
 * @version 0.3
 *
 * $Id: Ipsum.php 457 2010-06-13 01:37:05Z alex $
 */

/**
 * Foo_Ipsum
 *
 * @author Alex Weber <alex@alexweber.com.br>
 * @author Odlanier Mendes <master_odlanier@hotmail.com>
 * @copyright Copyright (c) 2009-2010, Alex Weber
 * @license http://foo-project.org/license/new-bsd  New BSD License
 */
class Foo_Ipsum {

  /**
   * Word list
   * @var array
   */
  protected static $_vocabulary = array(
    'lorem',
    'ipsum',
    'dolor',
    'sit',
    'amet',
    'consectetur',
    'adipiscing',
    'elit',
    'maecenas',
    'libero',
    'vehicula',
    'eu',
    'sagittis',
    'vitae',
    'convallis',
    'at',
    'purus',
    'suspendisse',
    'quam',
    'nisl',
    'malesuada',
    'ligula',
    'donec',
    'pharetra',
    'urna',
    'sed',
    'pellentesque',
    'varius',
    'mollis',
    'facilisis',
    'consequat',
    'egestas',
    'venenatis',
    'tempus',
    'lacus',
    'eros',
    'vestibulum',
    'cursus',
    'auctor',
    'tempor',
    'dapibus',
    'ut',
    'in',
    'sapien',
    'volutpat',
    'ultricies',
    'eget',
    'duis',
    'et',
    'faucibus',
    'risus',
    'mauris',
    'a',
    'est',
    'metus',
    'feugiat',
    'luctus',
    'id',
    'felis',
    'ante',
    'primis',
    'orci',
    'ultrices',
    'posuere',
    'cubilia',
    'curae',
    'curabitur',
    'augue',
    'nunc',
    'eleifend',
    'iaculis',
    'class',
    'aptent',
    'taciti',
    'sociosqu',
    'ad',
    'litora',
    'torquent',
    'per',
    'conubia',
    'nostra',
    'inceptos',
    'himenaeos',
    'hac',
    'habitasse',
    'platea',
    'dictumst',
    'praesent',
    'bibendum',
    'pulvinar',
    'diam',
    'non',
    'sem',
    'semper',
    'lectus',
    'fringilla',
    'nisi',
    'arcu',
    'nec',
    'fermentum',
    'velit',
    'massa',
    'etiam',
    'tincidunt',
    'leo',
    'blandit',
    'nulla',
    'laoreet',
    'vel',
    'mi',
    'integer',
    'hendrerit',
    'lacinia',
    'proin',
    'porta',
    'phasellus',
    'pretium',
    'aliquam',
    'justo',
    'interdum',
    'quis',
    'dictum',
    'tortor',
    'turpis',
    'neque',
    'commodo',
    'ac',
    'rutrum',
    'rhoncus',
    'magna',
    'ullamcorper',
    'lobortis',
    'tristique',
    'erat',
    'imperdiet',
    'nam',
    'nullam',
    'nibh',
    'accumsan',
    'morbi',
    'condimentum',
    'placerat',
    'odio',
    'enim',
    'euismod',
    'sodales',
    'dui',
    'ornare',
    'porttitor',
    'vulputate',
    'scelerisque',
    'viverra',
    'mattis',
    'quisque',
    'dignissim',
    'tellus',
    'cum',
    'sociis',
    'natoque',
    'penatibus',
    'magnis',
    'dis',
    'parturient',
    'montes',
    'nascetur',
    'ridiculus',
    'mus',
    'aenean',
    'vivamus',
    'facilisi',
    'congue',
    'elementum',
    'fusce',
    'suscipit',
    'gravida',
    'sollicitudin',
    'aliquet',
    'potenti',
    'molestie',
    'cras',
    'orem',
    'habitant',
    'senectus',
    'netus',
    'fames'
  );

  /**
   * Sentence length (words)
   * @var array
   */
  private static $_sentenceLength = array(6, 20);

  /**
   * Paragraph length (sentences)
   * @var array
   */
  private static $_paragraphLength = array(6, 10);

  /*
   * Getters & Setters
   */

  /**
   * Set sentence length
   * @param int $min
   * @param int $max
   */
  public static function setSentenceLength($min, $max) {
    self::$_sentenceLength[0] = $min;
    self::$_sentenceLength[1] = $max;
  }

  /**
   * Get sentence length
   * @return array
   */
  public static function getSentenceLength() {
    return self::$_sentenceLength;
  }

  /**
   * Set paragraph length
   * @param int $min
   * @param int $max
   */
  public static function setParagraphLength($min, $max) {
    self::$_paragraphLength[0] = $min;
    self::$_paragraphLength[1] = $max;
  }

  /**
   * Get paragraph length
   * @return array
   */
  public static function getParagraphLength() {
    return self::$_paragraphLength;
  }

  /**
   * Set words in vocabulary
   * @param array $vocabulary
   */
  public static function setVocabulary(array $vocabulary) {
    self::$_vocabulary = $vocabulary;
  }
  
  /*
   * Main Functionality
   */

  /**
   * Return x words
   * @param int $number
   * @param string $startsWith
   * @return string
   */
  public static function words($number, $startsWith = NULL) {
    $return = array();
    $lim = count(self::$_vocabulary) - 1;

    if (isset($startsWith)) {
      $explode = explode(' ', $startsWith);
      $starts_length = count($explode);
      $number -= $starts_length;
      $return = $explode;
      
      if ($number <= 0) {
        return implode(' ', $return);
      }
    }
    
    for ($i = 0; $i < $number; ++$i) {
      $return[] = self::$_vocabulary[mt_rand(0, $lim)];
    }

    $return[0] = ucwords($return[0]);

    return implode(' ', $return);
  }

  /**
   * Return x sentences
   * @param int $number
   * @param string $startsWith
   * @return string
   */
  public static function sentences($number, $startsWith = NULL) {
    $return = '';
    $start = 0;

    if (isset($startsWith)) {
      $return .= "{$startsWith} ";
      $start = 1;
      $wordsPerSentence = mt_rand(self::$_sentenceLength[0], self::$_sentenceLength[1]);
      $explode = explode(' ', $startsWith);
      $starts_length = count($explode);
      $wordsPerSentence -= $starts_length;
      $return .= strtolower(self::words($wordsPerSentence) . '. ');
    }
    
    for ($i = $start; $i < $number; ++$i) {
      $wordsPerSentence = mt_rand(self::$_sentenceLength[0], self::$_sentenceLength[1]);
      $return .= self::words($wordsPerSentence) . '. ';
    }

    return trim($return);
  }

  /**
   * Return x paragraphs
   * @param int $number
   * @param bool $html
   * @param string $startsWith
   * @return string
   */
  public static function paragraphs($number, $html = TRUE, $startsWith = NULL) {
    $return = '';
    $start = 0;
    
    if ($html) {
      $return .= '<p>';
    }
    
    if (isset($startsWith)) {
      $return .= "{$startsWith} ";
      $start = 1;
      $wordsPerSentence = mt_rand(self::$_sentenceLength[0], self::$_sentenceLength[1]);
      $explode = explode(' ', $startsWith);
      $starts_length = count($explode);
      $wordsPerSentence -= $starts_length;
      $return .= strtolower(self::words($wordsPerSentence) . '. ');
      
      $sentencesPerParagraph = mt_rand(self::$_paragraphLength[0], self::$_paragraphLength[1]);
      --$sentencesPerParagraph; // we already have our first sentence
      $return .= self::sentences($sentencesPerParagraph);
      
      if ($html) {
        $return .= '</p>';
      }
    }
    
    for ($i = $start; $i < $number; ++$i) {
      $sentencesPerParagraph = mt_rand(self::$_paragraphLength[0], self::$_paragraphLength[1]);
      if ($html) {
        $return .= '<p>';
      }
      
      $return .= self::sentences($sentencesPerParagraph);
      
      if ($html) {
        $return .= '</p>';
      }
    }

    return $return;
  }
}