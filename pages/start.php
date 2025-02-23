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
$contact = [
  [
    'faClass' => 'fab',
    'faSymbol' => 'f2c6',
    'url' => 'https://t.me/RundesBalli',
    'name' => 'RundesBalli',
    'title' => 'Telegram',
  ],
  [
    'faClass' => 'fab',
    'faSymbol' => 'f392',
    'url' => 'https://discord.com/users/456171575641636889',
    'name' => 'rundesballi',
    'title' => 'Discord',
  ],
  [
    'faClass' => 'fas',
    'faSymbol' => 'f120',
    'url' => 'https://pr0gramm.com/user/RundesBalli',
    'name' => 'RundesBalli',
    'title' => 'pr0gramm',
  ],
  [
    'faClass' => 'fas',
    'faSymbol' => 'f0e0',
    'url' => 'mailto:webspam@RundesBalli.com',
    'name' => 'webspam@RundesBalli.com',
    'title' => 'Email',
  ],
];
$content.= '<table>';
foreach($contact as $val) {
  $content.= '<tr><td><span class="'.$val['faClass'].' icon">&#x'.$val['faSymbol'].';</span>'.$val['title'].'</td><td><a href="'.$val['url'].'" target="_blank" rel="noopener">'.$val['name'].'</a></td></tr>';
}
$content.= '</table>';
$content.= '<p class="note">I will ignore automated emails and I am not interested in studies or full-time job offers.</p>';
$content.= '<p>If you think I\'d be the right person for your project, feel free to contact me! Likewise, If you have any comments, criticism, questions, etc. about my projects - or just want to say "hi" - don\'t hesitate to contact me.</p>';
?>
