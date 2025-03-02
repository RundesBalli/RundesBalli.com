<?php
/**
 * imprint.php
 * 
 * Imprint
 */
$title = 'Imprint';

$content.= '<h1><span class="fas icon">&#xf21b;</span>Imprint</h1>';
$content.= '<p>No commercial internet presence and therefore according to German law <a href="https://www.buzer.de/5_DDG.htm" target="_blank" rel="noopener">§5 DDG</a> not required to have an imprint.</p>';
$content.= '<p>To contact me, see the possibilities on the <a href="/"><span class="fas icon">&#xf2c2;</span>About me page</a>.</p>';

/**
 * Validity range
 */
$content.= '<h2><span class="fas icon">&#xf0e8;</span>Validity range</h2>';
$content.= '<p>This imprint and disclaimer applies only to the following websites.<br>Unless otherwise specified, it also applies to all subdomains (e.g. *.RundesBalli.com).</p>';

$domains = [
  [
    'RundesBalli.com',
    'https://RundesBalli.com',
  ],
  [
    'pr0.tools',
    'https://pr0.tools',
    'Only the main domain, no subdomains.',
  ],
  [
    'tankersparnis.net',
    'https://tankersparnis.net',
  ],
  [
    'Anti-Ananas.Club',
    'https://anti-ananas.club',
  ],
  [
    'PHP-Noise.com',
    'https://php-noise.com',
  ],
  [
    'Pfandautomat.com',
    'https://pfandautomat.com',
  ],
  [
    'bratwurst.network',
    'https://info.bratwurst.network',
    'Only the main domain and the following subdomains: api, auth, files, info',
  ],
];
$content.= '<div class="overflowXAuto"><table>';
$content.= '<tr><th>Domain</th><th>Notes</th></tr>';
foreach($domains as $domain) {
  $content.= '<tr><td><a href="'.$domain[1].'" target="_blank" rel="noopener">'.$domain[0].'</a></td><td class="small">'.(!empty($domain[2]) ? $domain[2] : './.').'</td></tr>';
}
$content.= '</table></div>';

/**
 * Honorable mentions
 */
$content.= '<h2><span class="fas icon">&#xf559;</span>Honorable mentions</h2>';
$mentions = [
  [
    'NullDev',
    'https://github.com/NullDev',
    'JavaScript help',
  ],
];
$content.= '<div class="overflowXAuto"><table>';
$content.= '<tr><th>Person</th><th>Notes</th></tr>';
foreach($mentions as $mention) {
  $content.= '<tr><td><a href="'.$mention[1].'" target="_blank" rel="noopener">'.$mention[0].'</a></td><td class="small">'.(!empty($mention[2]) ? $mention[2] : './.').'</td></tr>';
}
$content.= '</table></div>';

/**
 * Source citations, as it should be :-)
 */
$content.= '<h2><span class="fas icon">&#xf0c1;</span>Sources</h2>';
$sources = [
  [
    'Alex Brush font',
    'https://fonts.google.com/specimen/Alex+Brush',
    'Header & Logo font',
    'https://fonts.google.com/specimen/Alex+Brush/license',
  ],
  [
    'Fontawesome',
    'https://github.com/FortAwesome/Font-Awesome',
    'Icons',
    'https://github.com/FortAwesome/Font-Awesome/blob/6.x/LICENSE.txt',
  ],
  [
    'Roboto font',
    'https://fonts.google.com/specimen/Roboto',
    'Normal text font',
    'https://fonts.google.com/specimen/Roboto/license',
  ],
  [
    'Roboto Condensed font',
    'https://fonts.google.com/specimen/Roboto+Condensed',
    'Font for headings',
    'https://fonts.google.com/specimen/Roboto+Condensed/license',
  ],
  [
    'Roboto Mono font',
    'https://fonts.google.com/specimen/Roboto+Mono',
    'Font for monofont texts',
    'https://fonts.google.com/specimen/Roboto+Mono/license',
  ],
  [
    'Flag-Icons',
    'https://github.com/lipis/flag-icons',
    'Flag Icons',
    'https://github.com/lipis/flag-icons/blob/main/LICENSE',
  ],
];
$content.= '<div class="overflowXAuto"><table>';
$content.= '<tr><th>Source</th><th>Notes</th><th>License</th></tr>';
foreach($sources as $source) {
  $content.= '<tr><td><a href="'.$source[1].'" target="_blank" rel="noopener">'.$source[0].'</a></td><td class="small">'.(!empty($source[2]) ? $source[2] : './.').'</td><td class="small">'.(!empty($source[3]) ? '<a href="'.$source[3].'" target="_blank" rel="noopener">License</a>' : NULL).'</td></tr>';
}
$content.= '</table></div>';

/**
 * Disclaimer
 */
$content.= '<h2><span class="fas icon">&#xf0c9;</span>Disclaimer</h2>';
$content.= '<p>German law stuff, so it is in German.</p>';

$content.= '<h3>Haftung für Inhalte</h3>';
$content.= '<p>Als Diensteanbieter sind wir für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach Artikel 8 DSA sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.</p>';
$content.= '<p>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>';

$content.= '<h3>Haftung für Links</h3>';
$content.= '<p>Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.</p>';
$content.= '<p>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>';

$content.= '<h3>Urheberrecht</h3>';
$content.= '<p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.</p>';
$content.= '<p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>';

$content.= '<h3>Quelle</h3>';
$content.= '<p><a href="https://www.e-recht24.de" target="_blank" rel="noopener">https://www.e-recht24.de</a></p>';

/**
 * Privacy / Datasafety
 */
$content.= '<h2><span class="fas icon">&#xf505;</span>Privacy / Data safety</h2>';
$content.= '<p>More German law stuff which is also in German.</p>';

$content.= '<h3>Allgemeine Hinweise</h3>';
$content.= '<p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>';
$content.= '<p>Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.</p>';
$content.= '<p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>';

$content.= '<h3>Cookies</h3>';
$content.= '<p>Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert.</p>';
$content.= '<p>Die meisten der von uns verwendeten Cookies sind so genannte „Session-Cookies“. Sie werden nach Ende Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert, bis Sie diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.</p>';
$content.= '<p>Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell ausschließen sowie das automatische Löschen der Cookies beim Schließen des Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalität dieser Website eingeschränkt sein.</p>';

$content.= '<h3>Server-Log-Files</h3>';
$content.= '<p>Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten Server-Log Files, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>';
$content.= '<p>Browsertyp und Browserversion, verwendetes Betriebssystem, Referrer URL, Hostname des zugreifenden Rechners, Uhrzeit der Serveranfrage</p>';
$content.= '<p>Diese Daten sind nicht bestimmten Personen zuordenbar. Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen. Wir behalten uns vor, diese Daten nachträglich zu prüfen, wenn uns konkrete Anhaltspunkte für eine rechtswidrige Nutzung bekannt werden.</p>';

$content.= '<h3>SSL-Verschlüsselung</h3>';
$content.= '<p>Diese Seite nutzt aus Gründen der Sicherheit und zum Schutz der Übertragung vertraulicher Inhalte, wie zum Beispiel der Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des Browsers von "http://" auf "https://" wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.</p>';
$content.= '<p>Wenn die SSL Verschlüsselung aktiviert ist, können die Daten, die Sie an uns übermitteln, nicht von Dritten mitgelesen werden.</p>';

$content.= '<h3>Recht auf Auskunft, Löschung, Sperrung</h3>';
$content.= '<p>Sie haben jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck der Datenverarbeitung sowie ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der im Impressum angegebenen Kontaktmöglichkeit an uns wenden.</p>';

$content.= '<h3>Widerspruch Werbe-Mails</h3>';
$content.= '<p>Der Nutzung von im Rahmen des Impressums veröffentlichten Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-E-Mails, vor.</p>';

$content.= '<h3>Quelle</h3>';
$content.= '<p><a href="https://www.e-recht24.de" target="_blank" rel="noopener">https://www.e-recht24.de</a></p>';
?>
