<?php
/**
 * includes/generation/generateOutput.php
 * 
 * Generates the output with previous generated contents.
 */
$output = preg_replace(
  array(
    '/{TITLE}/im',
    '/{REQUESTURI}/im',
    '/{OGDESCRIPTION}/im',
    '/{NAV}/im',
    '/{CONTENT}/im',
    '/{FOOTER}/im',
  ),
  array(
    (!empty($title) ? $title.' - ' : NULL),
    (!empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : NULL),
    (!empty($ogDescription) ? '<meta property="og:description" content="'.$ogDescription.'">' : NULL),
    $nav,
    $content,
    $footer,
  ),
  $template
);
?>
