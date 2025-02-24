<?php
/**
 * includes/generation/footer.php
 * 
 * Footer generation
 */
$footerElements = [
];

$footer = '';
foreach($footerElements as $element) {
  $footer.= '<a href="'.$element['url'].'"'.($route == $element['route'] ? ' class="active"' : NULL).($element['newTab'] ? ' target="_blank" rel="noopener"' : NULL).'><span class="icon '.$element['faSet'].'">&#x'.$element['faIcon'].';</span>'.$element['text'].'</a>';
}
?>
