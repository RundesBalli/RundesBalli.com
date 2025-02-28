<?php
/**
 * includes/functions/output.php
 * 
 * Output sanitizer function
 * 
 * @param string The string to be sanitized
 * @param bool   True if the nl2br function has to be applied.
 * @return string
 */
function output($string, bool $nl2br = TRUE) {
  if($nl2br) {
    return nl2br(htmlentities(strip_tags($string), ENT_QUOTES));
  }
  return htmlentities(strip_tags($string), ENT_QUOTES);
}
?>
