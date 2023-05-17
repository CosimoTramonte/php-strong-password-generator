<?php
$lunghezzaPassword = $_GET['numberPassword'];
$lunghezzaPassword = strlen($lunghezzaPassword) ? $lunghezzaPassword : 0;

$alfabetoMinuscolo = "abcdefghijklmnopqrstuvwxyz";
$caratteriSpeciali = "!?&%$<>^+-*/()[]{}@#_=";
$stringaGenerata ="";

while (strlen($stringaGenerata) <= $lunghezzaPassword ) {
  $stringaGenerata .= $alfabetoMinuscolo[random_int(0, strlen($alfabetoMinuscolo) - 1)];
  $stringaGenerata .= mb_strtoupper($alfabetoMinuscolo[random_int(0, strlen($alfabetoMinuscolo) - 1)]);
  $stringaGenerata .= $caratteriSpeciali[random_int(0, strlen($caratteriSpeciali) - 1)];
  $stringaGenerata .= rand(0,9);
};

$stringaGenerata = substr($stringaGenerata, 0, $lunghezzaPassword);
$randomString = str_shuffle($stringaGenerata);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
  </head>
  <body>

    <div id="app">
      <div class="container py-5">

        <h2>Scegli la lunghezza della tua Password</h2>

        <form action="index.php" method="GET">
          <div class="my-3 w-50">
            <label for="numberPassword" class="form-label">Scegli la lunghezza della tua nuova Password</label>
            <input type="number" min="4" class="form-control" id="numberPassword" name="numberPassword">
          </div>
          <button type="submit" class="btn btn-primary">GENERA</button>
        </form>

        <p><?php echo $stringaGenerata ?></p>

      </div>
    </div>

    <script type="module" src="/src/main.js"></script>
  </body>
</html>