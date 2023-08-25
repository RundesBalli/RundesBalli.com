<?php
/**
 * pages/pr0.php
 * 
 * pr0gramm projects
 */

$title = 'pr0gramm related projects';
$content.= '<h1><span class="fas icon">&#xf120;</span><a href="https://pr0gramm.com" target="_blank" rel="noopener">pr0gramm</a> related projects</h1>';

/**
 * OG Tags
 */
$ogDescription = 'A collection of my pr0gramm related projects.';


/**
 * Note
 */
$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-12"><span class="bold highlight">As information for international guests:</span> pr0gramm is a German imageboard, similar to Reddit or others, but better.</div>'.
'</div>';

/**
 * Websites / GUIs
 */
$content.= '<h2>Websites / GUIs</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf7d9;</span><a href="https://pr0.tools" target="_blank" rel="noopener">pr0.tools</a></div>'.
  '<div class="col-s-12 col-l-7">pr0.tools is a link collection for useful tools around pr0gramm.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0tools" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].BADGE['sql'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf201;</span><a href="https://poststats.rundesballi.com" target="_blank" rel="noopener">Poststats</a></div>'.
  '<div class="col-s-12 col-l-7">A tool to quickly analyze a post on pr0gramm.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-poststats" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].BADGE['sql'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf4b9;</span>Spendenraid</div>'.
  '<div class="col-s-12 col-l-7">A tool to analyze the annual donation raid („Spendenraid“) on pr0gramm.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-Spendenraid" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].BADGE['sql'].BADGE['api'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf543;</span>Bondrucker (archived)</div>'.
  '<div class="col-s-12 col-l-7">Small gimmick to allow pr0gramm users to print on my receipt printer („Bondrucker“).<br>See the <a href="https://pr0gramm.com/user/RundesBalli/projekt-bondrucker" target="_blank" rel="noopener">related posts on pr0gramm</a> (only for registered members).</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-bondrucker" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['html5'].BADGE['css3'].BADGE['sql'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Scripts
 */
$content.= '<h2>Scripts</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf0c1;</span>apiCall</div>'.
  '<div class="col-s-12 col-l-7">The apiCall is a standalone function to use the API of pr0gramm. It provides autologin for bot accounts and is used by many of my scripts.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-apiCall" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf0e0;</span>Telegram Inbox Bot</div>'.
  '<div class="col-s-12 col-l-7">Bot to read the inbox and then notify via Telegram.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-inbox-telegram-bot" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].BADGE['telegram'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf201;</span>Inbox Autoresponse</div>'.
  '<div class="col-s-12 col-l-7">Bot to read the inbox and forward messages and to respond to mentions in comments.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-inbox-autoresponse" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf02d;</span>comment2txt</div>'.
  '<div class="col-s-12 col-l-7">CLI script to export all comments of a user.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-comment2txt" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['cli'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf0ac;</span>ShowScore</div>'.
  '<div class="col-s-12 col-l-7">Script to display the user\'s score (e.g. for microcontrollers that can\'t process the whole response from the API).</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/pr0gramm-showScore" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['api'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf1ec;</span>Invite requirement bot (archived)</div>'.
  '<div class="col-s-12 col-l-7">Telegram bot to calculate if a user has enough score for the next invite distribution. Now obsolete, since the conditions have changed and it is natively displayed on pr0gramm.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/pr0-dev/telegram-invitebenis-bot" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['telegram'].'</div>'.
'</div>';
$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Other...
 */
$content.= '<h2>Other...</h2>';

$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-12">Many of my pr0gramm related projects are available on <span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli?tab=repositories&q=pr0gramm" target="_blank" rel="noopener">GitHub</a>.</div>'.
'</div>';
?>
