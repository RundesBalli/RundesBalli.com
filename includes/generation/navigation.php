<?php
/**
 * includes/generation/navigation.php
 * 
 * Navigation generation
 */
$navElements = [
  [
    'faSet' => 'far',
    'faIcon' => 'f2c2',
    'url' => '/',
    'route' => 'default',
    'text' => 'About me',
    'newTab' => FALSE,
  ],
  [
    'faSet' => 'fas',
    'faIcon' => 'f542',
    'url' => '/projects',
    'route' => 'projects',
    'text' => 'Projects and Tools',
    'newTab' => FALSE,
  ],
  [
    'faSet' => 'fas',
    'faIcon' => 'f072',
    'url' => '/adsb',
    'route' => 'adsb',
    'text' => 'ADS-B',
    'newTab' => FALSE,
  ],
  [
    'faSet' => 'fas',
    'faIcon' => 'f013',
    'url' => '/factorio',
    'route' => 'factorio',
    'text' => 'Factorio',
    'newTab' => FALSE,
  ],
];

$nav = '<a id="toggleElement"></a>';
foreach($navElements as $element) {
  $nav.= '<a href="'.$element['url'].'"'.($route == $element['route'] ? ' class="active"' : NULL).($element['newTab'] ? ' target="_blank" rel="noopener"' : NULL).'><span class="icon '.$element['faSet'].'">&#x'.$element['faIcon'].';</span>'.$element['text'].'</a>';
}
?>
