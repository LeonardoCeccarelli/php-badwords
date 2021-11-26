<?php

// Variabile testo di prova
$textExemple = "Questo è il mio primo testo di prova utilizzando PHP!";

// Variabile corrispondente alla lunghezza totale del testo di prova
$lengthText = strlen($textExemple);

// Variabile inserita nell'url dall'utente
$userWord = $_GET["userText"];

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
    <p>Totale caratteri: "<?php echo $lengthText ?>"</p>

    <!-- testo inserito dall'utente tramite url e modificato con 3 asterischi -->
    <p>Testo Utente: <?php echo str_replace($userWord, '***', $userWord) ?></p>
</body>

</html>