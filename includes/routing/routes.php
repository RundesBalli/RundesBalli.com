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
  'default' => 'default.php',
  'projects' => 'projects.php',
  'adsb' => 'adsb.php',
  'pwgen' => 'pwgen.php',
  'toiletPaper' => 'toiletPaper.php',

  /**
   * Error pages
   */
  '404' => 'errors'.DIRECTORY_SEPARATOR.'404.php',
  '403' => 'errors'.DIRECTORY_SEPARATOR.'403.php',
];
?>
