<?php
/**
 * includes/generation/footer.php
 * 
 * Footer generation
 */
$footerElements = [
  [
    'faSet' => 'fas',
    'faIcon' => 'f21b',
    'url' => '/imprint',
    'route' => 'imprint',
    'text' => 'Imprint',
    'newTab' => FALSE,
  ],
  [
    'faSet' => 'fab',
    'faIcon' => 'f09b',
    'url' => 'https://github.com/RundesBalli',
    'route' => NULL,
    'text' => 'GitHub',
    'newTab' => TRUE,
  ],
];

$footer = '';
foreach($footerElements as $element) {
  $footer.= '<a href="'.$element['url'].'"'.($route == $element['route'] ? ' class="active"' : NULL).($element['newTab'] ? ' target="_blank" rel="noopener"' : NULL).'><span class="icon '.$element['faSet'].'">&#x'.$element['faIcon'].';</span>'.$element['text'].'</a>';
}
?>
