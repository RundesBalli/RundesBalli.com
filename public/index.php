<?php
/**
 * RundesBalli.com Website
 * 
 * @author    RundesBalli <webspam@rundesballi.com>
 * @copyright 2025 RundesBalli
 * @version   5.0
 * @see       https://github.com/RundesBalli/RundesBalli.com
 */

/**
 * Initialize the output, the default title and default ogTags.
 */
$content = '';
$title = '';
$ogDescription = '';

/**
 * Including the configuration and function loader, the page generation elements, the router and the output generation.
 */
require_once(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'loader.php');

/**
 * Output the generated output.
 */
echo $output;
?>
