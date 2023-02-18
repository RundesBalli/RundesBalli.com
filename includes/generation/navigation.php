<?php
/**
 * includes/generation/navigation.php
 * 
 * Navigation generation
 */
$a = ' class="active"';
$nav = "<a href='/'".($getp == "start" ? $a : NULL)."><span class='fas icon'>&#xf015;</span>Home</a>";
$nav.= "<a href='/tools'".($getp == "tools" ? $a : NULL)."><span class='fas icon'>&#xf7d9;</span>Tools</a>";
$nav.= "<a href='/projects'".($getp == "projects" ? $a : NULL)."><span class='fas icon'>&#xf542;</span>Projects</a>";
$nav.= "<a href='/pr0'".($getp == "pr0" ? $a : NULL)."><span class='fas icon'>&#xf120;</span>pr0gramm</a>";
?>
