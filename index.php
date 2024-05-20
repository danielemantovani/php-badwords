<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
</head>

<body>
    <h1>Inserisci del testo e una parola che vuoi censurare all'interno di esso</h1>
    <form action="form.php" method="GET">
        <textarea name="paragraph" aria-label="inserimento testo" placeholder="Digitare del testo"></textarea>
        <input type="text" name="censured" aria-label="inseirmento parola da censurare" placeholder="Parola da censurare">
        <button type="submit">Vai</button>
    </form>
</body>
</html>
