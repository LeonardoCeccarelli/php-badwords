<?php

// Variabile testo di prova
$textExemple = "Questo è il mio primo testo di prova utilizzando PHP!";

// Variabile inserita nell'url dall'utente
$userWord = $_GET["userText"];

// Testo modificato con l'aggiunta degli asterischi
$newText = str_replace(strtolower($userWord), '***', strtolower($textExemple));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>PHP Badwords</h1>

    <!-- Testo esempio -->
    <p><?php echo $textExemple ?></p>

    <!-- Caratteri totali variabile testo esempio -->
    <p>Totale caratteri: "<?php echo strlen($textExemple) ?>"</p>

    <!-- testo inserito dall'utente tramite url e modificato con 3 asterischi -->
    <p>Testo Modificato: <?php echo $newText ?></p>

    <!-- Lunghezza testo modificato con gli asterischi -->
    <p>Lunghezza testo modificato: "<?php echo strlen($newText) ?>"</p>
</body>

</html>