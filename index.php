<?php

session_start();

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
        <h1 class="text-center">GENERATORE DI PASSWORD CASUALI</h1>
        <div class="d-flex justify-content-center align-items-center my-5">
            <form action="./result.php">
                <label for="passwordLength" class="form-label">Inserisci la lunghezza della password da generare</label>
                <input type="number" name="passwordLength" id="passwordLength" class="form-control">
                <button class="btn btn-success w-100 mt-3">Genera</button>
                <?php

                ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>