<?php
/**
 * includes/generation/navigation.php
 * 
 * Navigation generation
 */
$navElements = [
];

$nav = '<a id="toggleElement"></a>';
foreach($navElements as $element) {
  $nav.= '<a href="'.$element['url'].'"'.($route == $element['route'] ? ' class="active"' : NULL).($element['newTab'] ? ' target="_blank" rel="noopener"' : NULL).'><span class="icon '.$element['faSet'].'">&#x'.$element['faIcon'].';</span>'.$element['text'].'</a>';
}
?>
