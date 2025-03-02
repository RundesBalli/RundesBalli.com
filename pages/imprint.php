<?php
/**
 * imprint.php
 * 
 * Imprint
 */
$title = 'Imprint';

$content.= '<h1><span class="fas icon">&#xf21b;</span>Imprint</h1>';
$content.= '<p>No commercial internet presence and therefore according to German law <a href="https://www.buzer.de/5_DDG.htm" target="_blank" rel="noopener">§5 DDG</a> not required to have an imprint.</p>';
$content.= '<p>To contact me, see the possibilities on the <a href="/"><span class="fas icon">&#xf2c2;</span>About me page</a>.</p>';

/**
 * Validity range
 */
$content.= '<h2><span class="fas icon">&#xf0e8;</span>Validity range</h2>';
$content.= '<p>This imprint and disclaimer applies only to the following websites.<br>Unless otherwise specified, it also applies to all subdomains (e.g. *.RundesBalli.com).</p>';

$domains = [
  [
    'RundesBalli.com',
    'https://RundesBalli.com',
  ],
  [
    'pr0.tools',
    'https://pr0.tools',
    'Only the main domain, no subdomains.',
  ],
  [
    'tankersparnis.net',
    'https://tankersparnis.net',
  ],
  [
    'Anti-Ananas.Club',
    'https://anti-ananas.club',
  ],
  [
    'PHP-Noise.com',
    'https://php-noise.com',
  ],
  [
    'Pfandautomat.com',
    'https://pfandautomat.com',
  ],
  [
    'bratwurst.network',
    'https://info.bratwurst.network',
    'Only the main domain and the following subdomains: api, auth, files, info',
  ],
];
$content.= '<div class="overflowXAuto"><table>';
$content.= '<tr><th>Domain</th><th>Notes</th></tr>';
foreach($domains as $domain) {
  $content.= '<tr><td><a href="'.$domain[1].'" target="_blank" rel="noopener">'.$domain[0].'</a></td><td class="small">'.(!empty($domain[2]) ? $domain[2] : './.').'</td></tr>';
}
$content.= '</table></div>';

/**
 * Honorable mentions
 */
$content.= '<h2><span class="fas icon">&#xf559;</span>Honorable mentions</h2>';
$mentions = [
  [
    'NullDev',
    'https://github.com/NullDev',
    'JavaScript help',
  ],
];
$content.= '<div class="overflowXAuto"><table>';
$content.= '<tr><th>Person</th><th>Notes</th></tr>';
foreach($mentions as $mention) {
  $content.= '<tr><td><a href="'.$mention[1].'" target="_blank" rel="noopener">'.$mention[0].'</a></td><td class="small">'.(!empty($mention[2]) ? $mention[2] : './.').'</td></tr>';
}
$content.= '</table></div>';

/**
 * Source citations, as it should be :-)
 */
$content.= '<h2><span class="fas icon">&#xf0c1;</span>Sources</h2>';
$sources = [
  [
    'Alex Brush font',
    'https://fonts.google.com/specimen/Alex+Brush',
    'Header & Logo font',
    'https://fonts.google.com/specimen/Alex+Brush/license',
  ],
  [
    'Fontawesome',
    'https://github.com/FortAwesome/Font-Awesome',
    'Icons',
    'https://github.com/FortAwesome/Font-Awesome/blob/6.x/LICENSE.txt',
  ],
  [
    'Roboto font',
    'https://fonts.google.com/specimen/Roboto',
    'Normal text font',
    'https://fonts.google.com/specimen/Roboto/license',
  ],
  [
    'Roboto Condensed font',
    'https://fonts.google.com/specimen/Roboto+Condensed',
    'Font for headings',
    'https://fonts.google.com/specimen/Roboto+Condensed/license',
  ],
  [
    'Roboto Mono font',
    'https://fonts.google.com/specimen/Roboto+Mono',
    'Font for monofont texts',
    'https://fonts.google.com/specimen/Roboto+Mono/license',
  ],
  [
    'Flag-Icons',
    'https://github.com/lipis/flag-icons',
    'Flag Icons',
    'https://github.com/lipis/flag-icons/blob/main/LICENSE',
  ],
];
$content.= '<div class="overflowXAuto"><table>';
$content.= '<tr><th>Source</th><th>Notes</th><th>License</th></tr>';
foreach($sources as $source) {
  $content.= '<tr><td><a href="'.$source[1].'" target="_blank" rel="noopener">'.$source[0].'</a></td><td class="small">'.(!empty($source[2]) ? $source[2] : './.').'</td><td class="small">'.(!empty($source[3]) ? '<a href="'.$source[3].'" target="_blank" rel="noopener">License</a>' : NULL).'</td></tr>';
}
$content.= '</table></div>';
?>
