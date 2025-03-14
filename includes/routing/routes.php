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
  'mockingText' => 'mockingText.php',
  'factorio' => 'factorio.php',
  'imprint' => 'imprint.php',
  'openrct2' => 'openrct2.php',

  /**
   * Error pages
   */
  '404' => 'errors'.DIRECTORY_SEPARATOR.'404.php',
  '403' => 'errors'.DIRECTORY_SEPARATOR.'403.php',
];
?>
