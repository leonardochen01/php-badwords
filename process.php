<?php
  // Ottenengo i dati inviati dal form
  $paragrafo = $_POST["paragrafo"];
  $parolaCensurata = $_POST["parola_censurata"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elaborazione</title>
</head>
<body>
  <div class="container-paragrafo-originale">
    <?php
    // Stampo il paragrafo e la sua lunghezza
    echo "<h2>Paragrafo originale:</h2>";
    echo $paragrafo;
    echo "<br>";
    echo "Lunghezza del paragrafo: " . strlen($paragrafo) . " caratteri";
    echo "<br><br>";
    ?>
  </div>

  <div class="container-paragrafo-censurato">
    <?php
    // Censura la parola nel paragrafo con ***
    $paragrafoCensurato = str_ireplace($parolaCensurata, '***', $paragrafo);
    // Stampo il paragrafo censurato e la sua lunghezza
    echo "<h2>Paragrafo censurato:</h2>";
    echo $paragrafoCensurato;
    echo "<br>";
    echo "Lunghezza del paragrafo censurato: " . strlen($paragrafoCensurato) . " caratteri";
    ?>
  </div>
</body>
</html>