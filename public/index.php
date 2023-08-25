<?php
/**
 * RundesBalli.com Website
 * 
 * @author    RundesBalli <webspam@rundesballi.com>
 * @copyright 2023 RundesBalli
 * @version   4.0
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
 * Output the generated and tidied output.
 */
echo $output;
?>
