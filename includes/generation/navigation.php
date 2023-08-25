<?php
/**
 * includes/generation/navigation.php
 * 
 * Navigation generation
 */
$a = ' class="active"';
$nav = '<a href="/"'.($route == 'start' ? $a : NULL).'><span class="fas icon">&#xf015;</span>Home</a>';
$nav.= '<a href="/projects"'.($route == 'projects' ? $a : NULL).'><span class="fas icon">&#xf542;</span>Projects</a>';
$nav.= '<a href="/adsb"'.($route == 'adsb' ? $a : NULL).'><span class="fas icon">&#xf072;</span>ADS-B</a>';
$nav.= '<a href="/factorio"'.($route == 'factorio' ? $a : NULL).'><span class="fas icon">&#xf013;</span>Factorio</a>';
$nav.= '<a href="/pr0"'.($route == 'pr0' ? $a : NULL).'><span class="fas icon">&#xf120;</span>pr0gramm</a>';
?>
