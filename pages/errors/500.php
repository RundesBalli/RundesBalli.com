<?php
/**
 * pages/errors/500.php
 * 
 * 500 ErrorDocument.
 * Outputs an internal server error.
 */
$title = '500 Internal Server Error';
http_response_code(500);
$content.= '<h1>500 Internal Server Error</h1>';
if(!empty($error)) {
  if($error == 'includeFileNotFound') {
    $errorMessage = 'The file to be included does not exist on the server.';
  } else {
    $errorMessage = 'Unknown error.';
  }
} else {
  $errorMessage = 'Unknown error.';
}
$content.= '<div class="row">'.
  '<div class="col-s-12 col-l-12">'.$errorMessage.'</div>'.
'</div>';
?>
