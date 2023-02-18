<?php
/**
 * includes/routing/routes.php
 * 
 * Routes
 * 
 * @var array
 */
$routes = [
  /**
   * Pages
   */
  'start' => 'start.php',
  'imprint' => 'imprint.php',
  'projects' => 'projects.php',
  'pr0' => 'pr0.php',

  /**
   * Tools
   */
  'tools' => 'tools.php',
  'pwgen' => 'pwgen.php',
  'toiletPaper' => 'toiletPaper.php',

  /**
   * Error pages
   */
  '404' => 'errors'.DIRECTORY_SEPARATOR.'404.php',
  '403' => 'errors'.DIRECTORY_SEPARATOR.'403.php'
];
?>
