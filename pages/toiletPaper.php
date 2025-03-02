<?php
/**
 * pages/toiletPaper.php
 * 
 * Toilet paper calculator
 */
$title = 'Toilet Paper Calculator';
$content.= "<h1><span class='fas icon'>&#xf71e;</span>Toilet Paper Calculator</h1>";

/**
 * OG Tags
 */
$ogDescription = 'Calculate the price per sheet and layer of various toilet paper packages!';

/**
 * Calculate
 */
if(isset($_POST['submit'])) {
  if(empty($_POST['price']) OR empty($_POST['rolls']) OR empty($_POST['sheets']) OR empty($_POST['layers'])) {
    return;
  }

  $price = abs(floatval(str_replace(',', '.', $_POST['price'])));
  $rolls = abs(intval($_POST['rolls']));
  $sheets = abs(intval($_POST['sheets']));
  $layers = abs(intval($_POST['layers']));

  $pricePer100Sheet = 100*($price/($rolls*$sheets));
  $pricePer1000Layers = $pricePer100Sheet/$layers*10;
  $content.= "<h2>Result</h2>";
  $content.= '<div class="overflowXAuto"><table>';
  $content.= '<tr><th>Description</th><th>Value</th></tr>';
  $content.= '<tr><td>Price per 100 Sheets</td><td>'.number_format($pricePer100Sheet, 4, ",", ".").'€</td></tr>';
  $content.= '<tr><td>Price per 1000 Layers</td><td>'.number_format($pricePer1000Layers, 4, ",", ".").'€</td></tr>';
  $addNew = TRUE;
  $content.= '</table></div>';
  $content.= '<h2>Calculator</h2>';
}

/**
 * Form
 */
$tabIndex = 1;
$content.= "<form method='post'>";
$content.= '<div class="overflowXAuto"><table>';
$content.= '<tr><th>Description</th><th>Field</th></tr>';
$content.= '<tr><td>Total price in € <span class="highlight">*</span></td><td><input type="number" placeholder="e.g. 3,79" min="0.01" step="0.01" name="price" tabindex="'.$tabIndex++.'" required autofocus></td></tr>';
$content.= '<tr><td>Roll count <span class="highlight">*</span></td><td><input type="number" placeholder="e.g. 8" min="1" step="1" name="rolls" tabindex="'.$tabIndex++.'" required></td></tr>';
$content.= '<tr><td>Sheets per roll <span class="highlight">*</span></td><td><input type="number" placeholder="e.g. 150" min="10" step="5" name="sheets" tabindex="'.$tabIndex++.'" required></td></tr>';
$content.= '<tr><td>Layers <span class="highlight">*</span></td><td><input type="number" placeholder="e.g. 3" min="1" max="6" step="1" name="layers" tabindex="'.$tabIndex++.'" required></td></tr>';
$content.= '<tr><td>Description / Name <span class="highlight">**</span></td><td><input type="text" placeholder="Shitpaper" maxlength="40" name="desc" tabindex="'.$tabIndex++.'"></td></tr>';
$content.= '<tr><td>Special offer price?</td><td><select name="off" tabindex="'.$tabIndex++.'"><option value="1">Yes</option><option value="0" selected>No</option></select></td></tr>';
$content.= '<tr><td colspan="2"><input type="submit" name="submit" value="Calculate" tabindex="'.$tabIndex++.'"></td></tr>';
$content.= '<tr><td colspan="2"><span class="highlight">*</span> Required</td></tr>';
$content.= '<tr><td colspan="2"><span class="highlight">**</span> If a name is given, the entry is stored in a cookie for later use.</td></tr>';
$content.= '</table></div>';
$content.= "</form>";

/**
 * Previous calculations
 */
if(!empty($_COOKIE['toiletPaper'])) {
  $tp = json_decode($_COOKIE['toiletPaper'], TRUE);
  if($tp !== NULL) {
    /**
     * Validate all entries.
     */
    $tpVal = [];
    foreach($tp as $val) {
      /**
       * Check if any field is empty.
       */
      if(empty($val['desc']) OR empty($val['100s']) OR empty($val['1000l']) OR !isset($val['off']) OR empty($val['ts'])) {
        continue;
      }

      /**
       * Price per 100 Sheet, Price per 1000 Layers, Offer Price, Timestamp.
       */
      if(!is_float($val['100s']) OR !is_float($val['1000l']) OR !is_bool($val['off']) OR !is_int($val['ts'])) {
        continue;
      }

      /**
       * Add validated element.
       */
      $tpVal[] = [
        'desc' => $val['desc'],
        '100s' => $val['100s'],
        '1000l' => $val['1000l'],
        'off' => $val['off'],
        'ts' => $val['ts'],
      ];
    }

    /**
     * Check if a new entry was submitted and add it too.
     */
    if(!empty($addNew) AND $addNew === TRUE AND !empty($_POST['desc'])) {
      $tpVal[] = [
        'desc' => trim(strip_tags($_POST['desc'])).'; Rolls: '.$rolls.'; Sheets: '.$sheets.'; Layers: '.$layers,
        '100s' => $pricePer100Sheet,
        '1000l' => $pricePer1000Layers,
        'off' => ((!empty($_POST['off']) AND $_POST['off'] == 1) ? TRUE : FALSE),
        'ts' => time()
      ];
    }

    /**
     * Check if there are any entries.
     */
    if(count($tpVal) > 0) {
      /**
       * There are validated entries. Set a new 180d cookie with the validated entries.
       */
      setcookie('toiletPaper', json_encode($tpVal), time()+(86400*180), NULL, NULL, TRUE, TRUE);

      /**
       * Output
       */
      $content.= '<h3>Previous calculations</h3>';
      $content.= '<div class="overflowXAuto"><table>';
      $content.= '<tr><th>Name</th><th>100 Sheets</th><th>1000 Layers</th><th>Special offer</th></tr>';

      foreach($tpVal as $val) {
        $content.= '<tr><td>'.output($val['desc'], FALSE).'<br><span class="note">'.date('d.m.Y, H:i:s', intval($val['ts'])).'</span></td><td>'.number_format($val['100s'], 4, ',', '.').'€</td><td>'.number_format($val['1000l'], 4, ',', '.').'€</td><td>'.($val['off'] ? 'Yes' : 'No').'</td></tr>';
      }

      $content.= '</table></div>';
    }
  } else {
    /**
     * If there is no content in the cookie that could be decoded, the cookie can be deleted.
     */
    setcookie('toiletPaper', NULL, 0, NULL, NULL, TRUE, TRUE);
  }
} else {
  /**
   * Check if a new entry was submitted and add it.
   */
  if(!empty($addNew) AND $addNew === TRUE AND !empty($_POST['desc'])) {
    setcookie('toiletPaper', json_encode([[
      'desc' => strip_tags($_POST['desc']).'; Rolls: '.$rolls.'; Sheets: '.$sheets.'; Layers: '.$layers,
      '100s' => $pricePer100Sheet,
      '1000l' => $pricePer1000Layers,
      'off' => ((!empty($_POST['off']) AND $_POST['off'] == 1) ? TRUE : FALSE),
      'ts' => time()
    ]]), time()+(86400*180), NULL, NULL, TRUE, TRUE);
  }
}
?>
