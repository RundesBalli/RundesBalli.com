<?php
/**
 * pages/adsb.php
 * 
 * ADS-B
 */

$title = 'ADS-B';
$content.= '<h1><span class="fas icon">&#xf542;</span>ADS-B</h1>';

/**
 * What is ADS-B?
 */
$content.= '<h2>What is ADS-B?</h2>';
$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-12">Aircraft automatically transmit their position, speed, altitude and other interesting information with their ADS-B transponder. This data is primarily used for air traffic control, but also for analysis of aircraft movements by companies, associations and authorities.</div>'.
'</div>';

$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Bratwurst ADS-B
 */
$content.= '<h2>Bratwurst ADS-B</h2>';

$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-12">We are an European group of people interested in the observation of local and international air traffic. My responsibilities include project management, marketing, and technical administration.</div>'.
'</div>';
$content.= '<div class="spacer-m"></div>';

$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-12"><a href="https://info.bratwurst.network" target="_blank" rel="noopener">Bratwurst ADS-B Info Website</a></div>'.
'</div>';
$content.= '<div class="spacer-m"></div>';

$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-12"><span class="bold">Feel free to join us!</span> Check out the contact options on the info website.</div>'.
'</div>';
$content.= '<div class="spacer-m"></div>';

$content.= '<div class="row center">'.
  '<div class="col-s-12 col-l-12"><img src="/assets/images/adsb/adsbMap.png" alt="Bratwurst ADS-B" title="Bratwurst ADS-B" width="650" height="379"></div>'.
'</div>';

$content.= '<div class="spacer-l"></div>';

$content.= '<hr>';

/**
 * Notifier
 */
$content.= '<h2>Notifier</h2>';

$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-3 bold"><span class="fas icon">&#xf0fb;</span><a href="https://github.com/RundesBalli/adsbTelegramNotifier" target="_blank" rel="noopener">adsbTelegramNotifier</a></div>'.
  '<div class="col-s-12 col-l-7">Notifies via Telegram when an aircraft passes over a certain area.</div>'.
  '<div class="col-s-12 col-l-2"><span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli/adsbTelegramNotifier" target="_blank" rel="noopener">SourceCode</a><br>'.BADGE['php'].BADGE['telegram'].'</div>'.
'</div>';

$content.= '<div class="spacer-l"></div>';
?>
