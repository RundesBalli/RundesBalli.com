<?php
/**
 * includes/constants.php
 * 
 * Setting constants
 */

/**
 * INCLUDE_DIR
 * 
 * Base include directory.
 */
const INCLUDE_DIR = __DIR__.DIRECTORY_SEPARATOR;

/**
 * PAGE_INCLUDE_DIR
 * 
 * Directory from which each subpage is included.
 */
const PAGE_INCLUDE_DIR = INCLUDE_DIR.'..'.DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR;

/**
 * Cookie duration
 * 
 * The time period during which the cookies are valid, or the time until which they are extended.
 */
const COOKIE_DURATION = 86400*45;

/**
 * Badges
 */
define('BADGE', [
  'php' => '<span class="fab icon help" title="PHP">&#xf457;</span>',
  'html5' => '<span class="fab icon help" title="HTML5">&#xf13b;</span>',
  'css3' => '<span class="fab icon help" title="CSS3">&#xf13c;</span>',
  'sql' => '<span class="fas icon help" title="SQL as database">&#xf1c0;</span>',
  'api' => '<span class="fas icon help" title="uses or provides an API">&#xf6ff;</span>',
  'cli' => '<span class="fas icon help" title="CLI script">&#xf120;</span>',
  'telegram' => '<span class="fab icon help" title="Telegram bot">&#xf2c6;</span>',
  'discord' => '<span class="fab icon help" title="uses Discord">&#xf392;</span>',
  'json' => '<span class="fas icon help" title="JSON">&#xe477;</span>',
  'js' => '<span class="fab icon help" title="JavaScript">&#xf3b8;</span>',
]);

/**
 * Flags
 */
define('FLAGS', [
  'de' => '<img class="flag" src="/assets/images/flags/de.svg" title="German"></span>',
  'en' => '<img class="flag" src="/assets/images/flags/gb.svg" title="English"></span>',
]);
?>
