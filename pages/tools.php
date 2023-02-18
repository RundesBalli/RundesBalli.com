<?php
/**
 * tools.php
 * 
 * Tools overview
 */
$title = "Tools";
$content.= "<h1><span class='fas icon'>&#xf7d9;</span>Tools</h1>";

$content.= "<h2>Online Tools</h2>";
$content.= "<div class='row'>".
"<div class='col-s-12 col-l-4'><a href='/pwgen'><span class='fas icon'>&#xf084;</span>Passwortgenerator</a></div>".
"<div class='col-s-12 col-l-8'>Ein einfacher Passwortgenerator, welcher 100 zufällig generierte Zeichenfolgen nach dem Schema <code>[0-9a-zA-Z]{64}</code> erstellt.</div>".
"</div>";
$content.= "<div class='spacer-m'></div>";

$content.= "<div class='row'>".
"<div class='col-s-12 col-l-4'><a href='/toiletPaper'><span class='fas icon'>&#xf71e;</span>Toilettenpapier Rechner</a></div>".
"<div class='col-s-12 col-l-8'>Rechner um den Preis pro 100 Blatt auszurechnen.</div>".
"</div>";
$content.= "<div class='spacer-s'></div>";

$content.= "<hr>";

/**
 * Telegram
 */
$content.= "<h2>Telegram</h2>";

$content.= "<div class='row'>".
"<div class='col-s-12 col-l-4'><a href='https://t.me/zufallbot' target='_blank' rel='noopener'><span class='fas icon'>&#xf522;</span>Telegram Zufallbot</a></div>".
"<div class='col-s-12 col-l-8'>Generiert Zufallsdaten und schickt sie an den anfragenden Telegram-Clienten.<br>SourceCode bei <a href='https://github.com/RundesBalli/telegram-Zufallbot' target='_blank' rel='noopener'><span class='fab icon'>&#xf09b;</span>GitHub</a>.</div>".
"</div>";
?>
