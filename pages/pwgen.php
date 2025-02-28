<?php
/**
 * pages/pwgen.php
 * 
 * Password generator
 */

$title = 'Password generator';
$content.= '<h1><span class="fas icon">&#xf084;</span>Password generator</h1>';
$content.= '<p><code>[0-9a-zA-Z]{64}</code></p>';

$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

for($x = 0; $x < 100; $x++) {
  $content.= '<p class="pre">';
  for ($i = 0; $i < 64; $i++) {
    $content.= $alphabet[mt_rand(0, strlen($alphabet)-1)];
  }
  $content.= '</p>';
}
?>
