<?php
//creo due variabili e gli do valore prelevando il name dall'input nell'index.php 

$text = $_GET["paragraph"];

$word_censured = $_GET["censured"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
</head>

<body>
    <section>
        <!-- stampo in pagina il testo inserito dal'utente -->
        <h2>Testo inserito: <p><?php echo $text; ?></p></h2>
        <!-- lunghezza del testo inserito -->
        <p>Lunghezza testo: <?php echo strlen($text); ?> caratteri</p>
    </section>

    <section>
        <!-- funzione per censurare la parola digitata dall'utente -->
        <?php
        $censured_text = str_replace($word_censured, "***", $text);
        ?>
        <!-- testo trasformato con parola inserita dall'utente censurata -->
        <h2>Testo con censura: <p><?php echo $censured_text; ?></p></h2>
    </section>
</body>
</html>

