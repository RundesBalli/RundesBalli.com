<?php
/**
 * pages/start.php
 * 
 * Home page
 */

/**
 * OG Tags
 */
$ogDescription = 'My name is RundesBalli and I am a hobbyist developer from Germany. I like procedural PHP coding, without doing this for a living.';

/**
 * About me
 */
$content.= '<h2><span class="fas icon">&#xf507;</span>About me</h2>';
$content.= '<p>My name is <b>RundesBalli</b> and I am a hobbyist developer from Germany. I like <b>procedural PHP coding</b>, without doing this for a living.</p>';

$content.= '<p>Most of my public projects are <b>small tools</b>, <b>scripts</b>, <b>boilerplates</b> and <b>websites</b>, which are commented, documented and coded in English.</p>';

$content.= '<p>Some of the projects are for use with the German imageboard pr0gramm.com and because of the majority of the target group of pr0gramm is German-speaking, the projects are partially commented and documented in German.</p>';

$content.= '<hr>';

/**
 * Contact
 */
$content.= '<h2><span class="fas icon">&#xf2bb;</span>Contact me</h2>';
$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-3"><span class="fab icon">&#xf2c6;</span><a href="https://t.me/RundesBalli" target="_blank" rel="noopener">RundesBalli</a></div>'.
  '<div class="col-s-12 col-l-3"><span class="fab icon">&#xf392;</span><a href="https://discord.com/users/456171575641636889" target="_blank" rel="noopener">rundesballi</a></div>'.
  '<div class="col-s-12 col-l-3"><span class="fas icon">&#xf120;</span><a href="https://pr0gramm.com/user/RundesBalli" target="_blank" rel="noopener">RundesBalli</a></div>'.
  '<div class="col-s-12 col-l-3"><span class="fas icon">&#xf0e0;</span><a href="mailto:webspam@RundesBalli.com" target="_blank">Email</a></div>'.
'</div>';
$content.= '<div class="spacer-m"></div>';
$content.= '<div class="row center note">'.
  '<div class="col-s-12 col-l-12">I will ignore automated emails and I am not interested in studies or full-time job offers.</div>'.
  '<div class="col-s-12 col-l-12">If you think I\'d be the right person for your project, feel free to email me! Likewise, If you have any comments, criticism, questions, etc. about my projects - or just want to say "hi" - don\'t hesitate to contact me.</div>'.
'</div>';
?>
