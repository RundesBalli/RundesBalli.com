<?php
/**
 * pwgen.php
 * 
 * Passwortgenerator
 */

$title = 'Passwortgenerator';
$content.= '<h1><span class="fas icon">&#xf084;</span>Passwortgenerator <code>[0-9a-zA-Z]{64}</code></h1>';

$alphabet = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789';

$content.= '<div class="center">';
for($x = 0; $x < 100; $x++) {
  $content.= '<p class="pre">';
  for ($i = 0; $i < 64; $i++) {
    $n = mt_rand(0, strlen($alphabet)-1);
    $content.= $alphabet[$n];
  }
  $content.= '</pre></p>';
}
$content.= '</div>';
?>
