<?php
/**
 * pages/projects.php
 * 
 * Projects
 */

$title = 'Projects';
$content.= '<h1><span class="fas icon">&#xf542;</span>Projects</h1>';

/**
 * Websites
 */
$content.= '<h2>Websites</h2>';

$content.= '<div class="row marginBottomMobile">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf03e;</span><a href="https://php-noise.com" target="_blank" rel="noopener">php-noise.com</a></div>'.
  '<div class="col-s-12 col-l-7">Generate random noise images as background images for websites, flyers and so on.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/php-noise.com" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].'</div>'.
'</div>';
$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3"><span class="fas icon">&#xf03e;</span>php-noise CLI</div>'.
  '<div class="col-s-12 col-l-7">Above mentioned is also available as CLI script. This script also acts as an API for the website.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/php-noise" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].BADGE['api'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf52f;</span><a href="https://tankersparnis.net" target="_blank" rel="noopener">Tankersparnis.net</a></div>'.
  '<div class="col-s-12 col-l-7">German portal for easy calculation of money saved when refueling with LPG compared to conventional fuels.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/tankersparnis" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].BADGE['sql'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Projects of friends I have collaborated on
 */
$content.= '<h2>Projects of friends I have collaborated on</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf543;</span><a href="https://nezos.cooking" target="_blank" rel="noopener">Nezos.Cooking</a></div>'.
  '<div class="col-s-12 col-l-7">German recipe collection from my friend <a href="https://nezos.wtf" target="_blank" rel="noopener">Nezos</a>.<br><span class="bold highlight">Tasks:</span> Backend and frontend.<br><span class="bold highlight">Note:</span> The recipes are not from me.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/cooking" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].BADGE['sql'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf144;</span><a href="https://boomerparty.live" target="_blank" rel="noopener">Boomerparty.live</a></div>'.
  '<div class="col-s-12 col-l-7">Official website for the <a href="https://open.spotify.com/playlist/64WfneVI8dqmpd6T6QKAMs" target="_blank" rel="noopener">Boomerparty-Playlist</a> community project of my friend <a href="https://pr0gramm.com/user/KaiserMolay" target="_blank" rel="noopener">KaiserMolay</a>.<br><span class="bold highlight">Tasks:</span> Whole website without photographs and images.<br><span class="bold highlight">Note:</span> The playlist is maintained by KaiserMolay.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/boomerparty.live" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Tools
 */
$content.= '<h2>Tools</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf084;</span><a href="/pwgen">Password generator</a></div>'.
  '<div class="col-s-12 col-l-7">A simple password generator which creates 100 randomly generated passwords according to the scheme <code>[0-9a-zA-Z]{64}</code>.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/RundesBalli.com/blob/master/pages/pwgen.php" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf71e;</span><a href="/toiletPaper">Toilet paper calculator</a></div>'.
  '<div class="col-s-12 col-l-7">Calculate the price of toilet paper.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/RundesBalli.com/blob/master/pages/toiletPaper.php" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Telegram bots
 */
$content.= '<h2>Telegram bots</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf522;</span><a href="https://t.me/zufallbot" target="_blank" rel="noopener">Random data bot</a></div>'.
  '<div class="col-s-12 col-l-7">German random number, letter and lottery number generator.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/telegram-Zufallbot" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['telegram'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf47f;</span><a href="https://t.me/zufallbot" target="_blank" rel="noopener">Chat-Id bot</a></div>'.
  '<div class="col-s-12 col-l-7">Returns the Chat ID in Groups and private chats.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/telegramChatIdBot" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['telegram'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf06e;</span>Server online-status check with reporting to telegram</div>'.
  '<div class="col-s-12 col-l-7">Simple <code>netcat</code> script to check the online status of certain services on a remote server.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://gist.github.com/RundesBalli/4bdcf555c78c17a7b917de31cd7b4df0" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].BADGE['telegram'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Scripts
 */
$content.= '<h2>Scripts</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf0ad;</span>lightweight-PHP-Boilerplate</div>'.
  '<div class="col-s-12 col-l-7">A lightweight PHP boilerplate and customizable code-foundation for building secure and dynamic websites with ease.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/lightweight-PHP-Boilerplate" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf02f;</span>escpos-php-driver</div>'.
  '<div class="col-s-12 col-l-7">A driver for Epson <code>ESC/POS</code> thermal printers</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/escpos-php-driver" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf302;</span>terminal-imager</div>'.
  '<div class="col-s-12 col-l-7">A CLI script to convert images to <code>ANSI escape code</code> images.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/terminal-imager" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf793;</span>jsonDumper</div>'.
  '<div class="col-s-12 col-l-7">Simple JSON dumper with token and file listing.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/jsonDumper" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['json'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Snippets
 */
$content.= '<h2>Snippets</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf0c1;</span>clickableLinks</div>'.
  '<div class="col-s-12 col-l-7">Function to automatically link URLs in texts.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://gist.github.com/RundesBalli/3c49de99e16c776c9cf733ffb9f2ebf9" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Crawler
 */
$content.= '<h2>Crawler</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf7ba;</span>ADR Crawler</div>'.
  '<div class="col-s-12 col-l-7">Ambient Dose Rate (German: ODL = Ortsdosisleistung) crawler for ~1700 monitoring sites within Germany and ~110 monitoring sites within austria.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/ADR-Crawler" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Discord
 */
$content.= '<h2>Discord</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fab icon">&#xf392;</span>Discord Reminder-Bot</div>'.
  '<div class="col-s-12 col-l-7">Script to automatically send a predefined text as a bot or via WebHook to a text channel.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/discord-reminderBot" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Satire
 */
$content.= '<h2>Satire</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf72f;</span><a href="https://pfandautomat.com" target="_blank" rel="noopener">Pfandautomat.com</a></div>'.
  '<div class="col-s-12 col-l-7">A little fun project about the very annoying oneway-bottle deposit machines (= „Pfandautomat“) known in Germany.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/Pfandautomat.com" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf00d;</span><a href="https://anti-ananas.club" target="_blank" rel="noopener">Anti-Ananas Club</a></div>'.
  '<div class="col-s-12 col-l-7">A German satire counter-reaction project to the Hawaii pizza meme.<br><span class="note">„Ananas“ = Pineapple</span></div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/anti-ananas.club" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * More...
 */
$content.= '<h2>More...</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-12 center">Many of my projects are available on <span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli" target="_blank" rel="noopener">GitHub</a></div>'.
'</div>';
?>
