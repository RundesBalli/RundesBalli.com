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
  $content.= "<h3>Ergebnis</h3>";
  $content.= "<div class='row'>".
    "<div class='col-s-12 col-l-6 alignRightNotMobile'>Price per 100 Sheets</div>".
    "<div class='col-s-12 col-l-6 bold highlight'>".number_format($pricePer100Sheet, 4, ",", ".")."€</div>".
  "</div>";
  $pricePer1000Layers = $pricePer100Sheet/$layers*10;
  $content.= "<div class='row'>".
    "<div class='col-s-12 col-l-6 alignRightNotMobile'>Price per 1000 Layers</div>".
    "<div class='col-s-12 col-l-6 bold highlight'>".number_format($pricePer1000Layers, 4, ",", ".")."€</div>".
  "</div>";
  $addNew = TRUE;
  $content.= "<div class='spacer-m'></div>";
}

/**
 * Form
 */
$tabindex = 1;
$content.= "<form method='post'>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Total price in € <span class='note highlight'>*</span></div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='e.g. 3,79' min='0.01' step='0.01' name='price' tabindex='".$tabindex++."' required autofocus></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Roll count <span class='note highlight'>*</span></div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='e.g. 8' min='1' step='1' name='rolls' tabindex='".$tabindex++."' required></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Sheets per roll <span class='note highlight'>*</span></div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='e.g. 150' min='10' step='5' name='sheets' tabindex='".$tabindex++."' required></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Layers <span class='note highlight'>*</span></div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='e.g. 3' min='1' max='6' step='1' name='layers' tabindex='".$tabindex++."' required></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Description / Name <span class='note highlight'>**</span></div>".
  "<div class='col-s-12 col-l-6'><input type='text' placeholder='Shitpaper' maxlength='40' name='desc' tabindex='".$tabindex++."'></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Special offer price?</div>".
  "<div class='col-s-12 col-l-6'><select name='off' tabindex='".$tabindex++."'><option value='1'>Yes</option><option value='0' selected>No</option></select></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Calculate</div>".
  "<div class='col-s-12 col-l-6'><input type='submit' name='submit' value='Calculate' tabindex='".$tabindex++."'></div>".
"</div>";
$content.= "<div class='row note center'>".
  "<div class='col-s-12 col-l-12'><span class='highlight'>*</span> Required</div>".
  "<div class='col-s-12 col-l-12'><span class='highlight'>**</span> If a name is given, the entry is stored in a cookie for later use.</div>".
"</div>";
$content.= "</form>";
$content.= "<div class='spacer-m'></div>";

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
        'ts' => $val['ts']
      ];
    }

    /**
     * Check if a new entry was submitted and add it too.
     */
    if(!empty($addNew) AND $addNew === TRUE AND !empty($_POST['desc'])) {
      $tpVal[] = [
        'desc' => strip_tags($_POST['desc']).'; Rolls:'.$rolls.'; Sheets:'.$sheets.'; Layers:'.$layers,
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
       * Table heading
       */
      $content.= "<div class='row highlight bold marginBottomMobile'>".
        "<div class='col-s-12 col-l-7'>Description / Name</div>".
        "<div class='col-s-5 col-l-2'>100 Sheets</div>".
        "<div class='col-s-5 col-l-2'>1000 Layers</div>".
        "<div class='col-s-12 col-l-1'>Special offer price</div>".
      "</div>";

      /**
       * Iterate through entries.
       */
      foreach($tpVal as $val) {
        $content.= "<div class='row marginBottomMobile'>".
          "<div class='col-s-12 col-l-7'>".htmlentities($val['desc'], ENT_QUOTES)."<br><span class='note'>".date('d.m.Y, H:i:s', $val['ts'])."</span></div>".
          "<div class='col-s-5 col-l-2'>".number_format($val['100s'], 4, ',', '.')." €</div>".
          "<div class='col-s-5 col-l-2'>".number_format($val['1000l'], 4, ',', '.')." €</div>".
          "<div class='col-s-12 col-l-1'>".($val['off'] ? 'Ja' : 'Nein')."</div>".
        "</div>";
      }
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
      'desc' => strip_tags($_POST['desc']).'; Rolls:'.$rolls.'; Sheets:'.$sheets.'; Layers:'.$layers,
      '100s' => $pricePer100Sheet,
      '1000l' => $pricePer1000Layers,
      'off' => ((!empty($_POST['off']) AND $_POST['off'] == 1) ? TRUE : FALSE),
      'ts' => time()
    ]]), time()+(86400*180), NULL, NULL, TRUE, TRUE);
  }
}
?>
