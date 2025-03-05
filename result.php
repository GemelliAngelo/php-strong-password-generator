<?php

require_once "./functions.php";

session_start();

if (isset($_GET['passwordLength'])) {
    $_SESSION['password'] = randomPasswordGenerator($_GET['passwordLength']);
  }

?>

<!Doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <h1 class="text-center">Ecco la tua password</h1>
        <div class="my-3">
            <div class="border text-bg-secondary p-3">
                <h2 class="text-center my-3">
                    <?php echo $_SESSION['password']; ?>
                </h2>
            </div>
            <hr>
            <h3 class="text-center my-3">    
                <a href="./index.php">Torna Indietro</a>
            </h3>
        </div>    
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>