<?php
/**
 * pwgen.php
 * 
 * Passwortgenerator
 */

$title = "Passwortgenerator";
$content.= "<h1><span class='fas icon'>&#xf084;</span>Passwortgenerator <code>[0-9a-zA-Z]{64}</code></h1>".PHP_EOL;
$content.= "<div class='spacer-m'></div>".PHP_EOL;

$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
$passwords = "";
for($x = 0; $x < 100; $x++) {
  for ($i = 0; $i < 64; $i++) {
    $n = rand(0, strlen($alphabet)-1);
    $passwords.= $alphabet[$n];
  }
  $passwords.= "<br>\n";
}

$content.= "<div class='row center'>".PHP_EOL.
"<div class='col-x-12 col-s-12 col-m-12 col-l-12 col-xl-12'><pre>".PHP_EOL.
$passwords.PHP_EOL.
"</pre></div>".PHP_EOL.
"</div>".PHP_EOL;
?>
