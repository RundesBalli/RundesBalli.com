<?php
/**
 * toiletPaper.php
 * 
 * Toilet paper calculator
 */
$content.= "<h1><span class='fas icon'>&#xf71e;</span>Toilettenpapier Rechner</h1>";
$content.= "<div class='row center'>".
  "<div class='col-s-12 col-l-12'>Rechner um den Preis pro 100 Blatt auszurechnen.</div>".
"</div>";
$content.= "<form method='post'>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Gesamtpreis in €</div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='Bspw. 3,79' min='0.01' step='0.01' name='price' required></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Anzahl Rollen</div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='Bspw. 8' min='1' step='1' name='rolls' required></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Blatt pro Rolle</div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='Bspw. 150' min='10' step='5' name='sheets' required></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Lagen</div>".
  "<div class='col-s-12 col-l-6'><input type='number' placeholder='Bspw. 3' min='1' max='6' step='1' name='layers'></div>".
"</div>";
$content.= "<div class='row'>".
  "<div class='col-s-12 col-l-6 alignRightNotMobile'>Ausrechnen</div>".
  "<div class='col-s-12 col-l-6'><input type='submit' name='submit' value='Ausrechnen'></div>".
"</div>";
$content.= "</form>";
$content.= "<div class='spacer-m'></div>";

if(isset($_POST['submit'])) {
  if(empty($_POST['price']) OR empty($_POST['rolls']) OR empty($_POST['sheets'])) {
    return;
  }

  $price = abs(floatval(str_replace(',', '.', $_POST['price'])));
  $rolls = abs(intval($_POST['rolls']));
  $sheets = abs(intval($_POST['sheets']));
  $layers = ((!empty($_POST['layers']) AND intval($_POST['layers']) > 0) ? intval($_POST['layers']) : 0);

  if(empty($price) OR empty($rolls) OR empty($sheets)) {
    return;
  }

  $pricePer100Sheet = 100*($price/($rolls*$sheets));
  $content.= "<h3>Ergebnis</h3>";
  $content.= "<div class='row center'>".
    "<div class='col-s-12 col-l-6 alignRightNotMobile'>Preis pro 100 Blatt</div>".
    "<div class='col-s-12 col-l-6 bold highlight'>".number_format($pricePer100Sheet, 4, ",", ".")."€</div>".
  "</div>";
  if($layers > 0) {
    $pricePer1000Layers = $pricePer100Sheet/$layers*10;
    $content.= "<div class='row center'>".
      "<div class='col-s-12 col-l-6 alignRightNotMobile'>Preis pro 1000 einzelnen Lagen</div>".
      "<div class='col-s-12 col-l-6 bold highlight'>".number_format($pricePer1000Layers, 4, ",", ".")."€</div>".
    "</div>";
  }
}
?>
