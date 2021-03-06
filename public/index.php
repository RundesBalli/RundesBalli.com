<?php
/**
 * RundesBalli.com
 * 
 * @author    RundesBalli <webspam@rundesballi.com>
 * @copyright 2020 RundesBalli
 * @version   3.0
 * @see       https://github.com/RundesBalli/RundesBalli.com
 */

/**
 * Initialisieren des Outputs und des Standardtitels
 */
$content = "";
$title = "";

/**
 * Herausfinden welche Seite angefordert wurde
 */
if(!isset($_GET['p']) OR empty($_GET['p'])) {
  $getp = "start";
} else {
  preg_match("/([\d\w-]+)/i", $_GET['p'], $match);
  $getp = $match[1];
}

/**
 * Das Seitenarray für die Seitenzuordnung
 */
$pageArray = array(
  /* Standardseiten */
  'start'          => 'start.php',
  'imprint'        => 'imprint.php',
  'pwgen'          => 'pwgen.php',
  'projects'       => 'projects.php',
  'pr0'            => 'pr0.php',

  /* Fehlerseiten */
  '404'            => '404.php',
  '403'            => '403.php'
);

/**
 * Prüfung ob die Unterseite im Array existiert, falls nicht 404
 */
if(isset($pageArray[$getp])) {
  require_once(__DIR__.DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR.$pageArray[$getp]);
} else {
  require_once(__DIR__.DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."404.php");
}

/**
 * Navigation
 */
$a = " class='active'";
$nav = "<a href='/'".($getp == "start" ? $a : NULL)."><span class='fas icon'>&#xf015;</span>Startseite</a>";
$nav.= "<a href='/pwgen'".($getp == "pwgen" ? $a : NULL)."><span class='fas icon'>&#xf084;</span>PWgen</a>";
$nav.= "<a href='/projects'".($getp == "projects" ? $a : NULL)."><span class='fas icon'>&#xf542;</span>Projekte</a>";
$nav.= "<a href='/pr0'".($getp == "pr0" ? $a : NULL)."><span class='fas icon'>&#xf120;</span>pr0gramm</a>";

/**
 * Footer
 */
$footer = "<a href='/imprint'".($getp == "imprint" ? $a : NULL)."><span class='fas icon'>&#xf21b;</span>Impressum</a>";
$footer.= "<a href='https://github.com/RundesBalli/RundesBalli.com' target='_blank' rel='noopener'><span class='fab icon'>&#xf09b;</span>GitHub</a>";

/**
 * Templateeinbindung und Einsetzen der Variablen
 */
$templatefile = __DIR__.DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."template.tpl";
$fp = fopen($templatefile, "r");
echo preg_replace(array("/{TITLE}/im", "/{NAV}/im", "/{FOOTER}/im", "/{CONTENT}/im"), array((empty($title) ? "" : " - ".$title), $nav, $footer, $content), fread($fp, filesize($templatefile)));
fclose($fp);
?>
