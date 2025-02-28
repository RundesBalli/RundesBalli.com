<?php
/**
 * pages/adsb.php
 * 
 * ADS-B Information Page
 */

$title = 'ADS-B';
$content.= '<h1><span class="fas icon">&#xf072;</span>ADS-B</h1>';

/**
 * OG Tags
 */
$ogDescription = 'The Bratwurst ADS-B project! We are an European group of people interested in the observation of local and international air traffic.';

/**
 * What is ADS-B?
 */
$content.= '<h2><span class="fas icon">&#xe4e3;</span>What is ADS-B?</h2>';
$content.= '<p>Aircraft automatically transmit their position, speed, altitude and other interesting information with their ADS-B transponder. This data is primarily used for air traffic control, but also for analysis of aircraft movements by companies, associations and authorities.</p>';
$content.= '<p>Some aircraft does only send their callsign and no other data. For this purpose a large network of ADS-B receivers are needed on ground to multilaterate/triangulate the aircraft and find out their position, altitude, etc.</p>';

/**
 * Bratwurst ADS-B
 */
$content.= '<h2><span class="fas icon">&#xf519;</span>Bratwurst ADS-B project</h2>';
$content.= '<p>We are an European group of people interested in the observation of local and international air traffic. My responsibilities include project management, marketing, and technical administration.</p>';
$content.= '<p>Take a look at our <a href="https://info.bratwurst.network" target="_blank" rel="noopener">Bratwurst ADS-B information website</a> and become a member of our community! You can find the respective contact options on the linked website.</p>';

$content.= '<p><img class="imgGlow" src="/assets/images/adsb/adsbMap.png" alt="Bratwurst ADS-B" title="Bratwurst ADS-B" width="650" height="379"></p>';

?>
