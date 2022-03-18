<?php
/**
 * pwgen.php
 * 
 * Passwortgenerator
 */

$title = "Passwortgenerator";
$content.= "<h1 class='center'><span class='fas icon'>&#xf084;</span>Passwortgenerator <code>[0-9a-zA-Z]{64}</code></h1>";
$content.= "<div class='spacer-m'></div>";

$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";

$content.= "<div class='row center'>";
for($x = 0; $x < 100; $x++) {
  $content.= "<div class='col-s-12 col-l-12 pre breakWord'>";
  for ($i = 0; $i < 64; $i++) {
    $n = mt_rand(0, strlen($alphabet)-1);
    $content.= $alphabet[$n];
  }
  $content.= "</div>";
}
$content.= "</div>";
?>
