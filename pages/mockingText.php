<?php
/**
 * pages/mockingText.php
 * 
 * Mocking text generator
 */

$title = 'Mocking Text Generator';
$content.= '<h1><span class="fas icon">&#xf58b;</span>Mocking Text Generator</h1>';

/**
 * OG Tags
 */
$ogDescription = 'A tool to customise a text according to the "Mocking SpongeBob" meme.';

/**
 * Information
 */
$content.= '<h2>What is this?</h2>';
$content.= '<p>If you\'re wondering what this nonsense is about, check out the <a href="https://knowyourmeme.com/memes/mocking-spongebob" target="_blank" rel="noopener">"Mocking SpongeBob"</a> meme.</p>';

/**
 * Input
 */
$content.= '<h2>Input</h2>';
$content.= '<form method="post">';
$content.= '<p><textarea name="text" rows="12" placeholder="Place your text here..."></textarea></p>';
$content.= '<p><input type="submit" value="Mock it!"></p>';
$content.= '</form>';

/**
 * Output
 */
if(!empty($_POST['text'])) {
  $content.= '<h2>Output</h2>';
  $text = trim($_POST['text']);
  $text = str_split($text);

  /**
   * Mock randomly.
   */
  $content.= '<h3>Randomly alternating letters</h3>';
  $nonsense = '';
  foreach($text as $char) {
    $nonsense.= (mt_rand(0, 1) ? mb_strtolower($char, 'UTF-8') : mb_strtoupper($char, 'UTF-8'));
  }
  $content.= '<p><textarea readonly rows="12">'.output($nonsense, FALSE).'</textarea></p>';

  /**
   * Mock the text alternating.
   */
  $mock = ['Start with a lowercase letter, alternating', 'Start with an uppercase letter, alternating'];
  foreach($mock as $startValue => $title) {
    $content.= '<h3>'.$title.'</h3>';
    $down = $startValue;
    $nonsense = '';
    foreach($text as $char) {
      if(!empty($char)) {
        if($down == 0) {
          $nonsense.= mb_strtoupper($char, 'UTF-8');
          $down = 1;
        } else {
          $nonsense.= mb_strtolower($char, 'UTF-8');
          $down = 0;
        }
      } else {
        $content.= ' ';
      }
    }
    $content.= '<p><textarea readonly rows="12">'.output($nonsense, FALSE).'</textarea></p>';
  }
}
?>
