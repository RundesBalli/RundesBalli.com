<?php
/**
 * pwgen.php
 * 
 * Passwortgenerator
 */

$title = "Passwortgenerator";
$content.= "<h1><span class='fas icon'>&#xf084;</span>Passwortgenerator <code>[0-9a-zA-Z]{64}</code></h1>";
$content.= "<div class='spacer-m'></div>";

$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
$passwords = "";
for($x = 0; $x < 100; $x++) {
  for ($i = 0; $i < 64; $i++) {
    $n = rand(0, strlen($alphabet)-1);
    $passwords.= $alphabet[$n];
  }
  $passwords.= "<br>\n";
}

$content.= "<div class='row center'>".
"<div class='col-x-12 col-s-12 col-m-12 col-l-12 col-xl-12'><pre>".
$passwords.
"</pre></div>".
"</div>";
?>
