<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>RundesBalli.com</title>
  <link href="/src/style.css"  rel="stylesheet">
  <link rel="shortcut icon" href="/src/favicon.png" type="image/png">
  <meta name="theme-color" content="#000000">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div id="header"><a href="https://RundesBalli.com/"><img src="/src/logo.png" alt="Logo"></a></div>
  <div class="wrapper">
      <a href="https://pr0gramm.com/user/RundesBalli" target="_blank" class="iconlink"><span class="fas">&#xf120;</span></a><a href="https://pr0p0ll.com" target="_blank" class="iconlink"><span class="far">&#xf044;</span></a><a href="https://RundesBalli.com/?pwgen" class="iconlink"><span class="fas">&#xf084;</span></a><a href="https://t.me/RundesBalli" target="_blank" class="iconlink"><span class="fab">&#xf2c6;</span></a><a href="https://github.com/RundesBalli" target="_blank" class="iconlink"><span class="fab">&#xf09b;</span></a><a href="mailto:webspam@RundesBalli.com" target="_blank" class="iconlink"><span class="fas">&#xf0e0;</span></a><a href="https://RundesBalli.com/?imprint" class="iconlink"><span class="fas">&#xf21b;</span></a><a href="https://RundesBalli.com/?sources" class="iconlink"><span class="fas">&#xf121;</span></a>
  </div>
  <div id="info">Made with <span class="fab">&#xf457;</span>, <span class="fab">&#xf13b;</span>, <span class="fab">&#xf13c;</span> &amp; <span class="fab">&#xf2b4;</span> &horbar; Hosted on <span class="fab">&#xf17c;</span></div>
  <?php
    if(isset($_GET['imprint'])) {
      echo "<div class='wrapper'><h1>Impressum</h1><p>nach <a href='https://dejure.org/gesetze/TMG/5.html' target='_blank'>&sect;5 TMG</a> und <a href='http://www.urheberrecht.org/law/normen/rstv/RStV-13/text/2010_06.php' target='_blank'>&sect;55 Abs. 2 RStV</a> nicht impressumspflichtig</p><p><a href='mailto:webspam@RundesBalli.com' target='_blank'>Kontakt</a> | <a href='https://whois.com/whois/RundesBalli.com' target='_blank'>WhoIs</a></p></div>";
    } elseif(isset($_GET['sources'])) {
      echo "<div class='wrapper'><h1>Quellenangaben</h1><a href='https://www.dafont.com/de/weather-sunday.font' target='_blank'>Header-Font</a> | <a href='https://fontawesome.com/start' target='_blank'>Font-Awesome</a></div>";
    } elseif(isset($_GET['pwgen'])) {
      echo "<div class='wrapper'><h1>Passwortgenerator</h1>";
      echo "<h3>bin2hex(random_bytes(64));</h3>";
      echo "<textarea cols='64' rows='10'>";
      for($i = 0; $i < 100; $i++) {
        echo bin2hex(random_bytes(64));
        echo "\n";
      }
      echo "</textarea>";      
      function genpw($alphabet) {
        $pass = "";
        for ($i = 0; $i < 64; $i++) {
            $n = rand(0, strlen($alphabet)-1);
            $pass.= $alphabet[$n];
        }
        echo $pass;
      }
      echo "<h3>[0-9a-zA-Z]{64}</h3>";
      echo "<textarea cols='64' rows='10'>";
      for($i = 0; $i < 100; $i++) {
        genpw("abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789");
        echo "\n";
      }
      echo "</textarea>";
      
      echo "<h3>[0-9a-fA-F]{64}</h3>";
      echo "<textarea cols='64' rows='10'>";
      for($i = 0; $i < 100; $i++) {
        genpw("abcdefABCDEF0123456789");
        echo "\n";
      }
      echo "</textarea>";
      
      echo "<h3>hash('sha256', bin2hex(random_bytes(4096)));</h3>";
      echo "<textarea cols='64' rows='10'>";
      for($i = 0; $i < 100; $i++) {
        echo hash('sha256', bin2hex(random_bytes(4096)));
        echo "\n";
      }
      echo "</textarea>";
      
      echo "<h3>hash('md5', bin2hex(random_bytes(4096)));</h3>";
      echo "<textarea cols='32' rows='10'>";
      for($i = 0; $i < 100; $i++) {
        echo hash('md5', bin2hex(random_bytes(4096)));
        echo "\n";
      }
      echo "</textarea>";
      echo "</div>";
    }

  ?>

</body>
</html>