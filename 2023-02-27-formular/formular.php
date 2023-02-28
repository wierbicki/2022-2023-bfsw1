<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="vorname">
        <input type="text" name="nachname">
        <button>Formular verarbeiten</button>
    </form>

    <?php

    $vorname = $_POST["vorname"] ?? "Unbekannt";
    $nachname = $_POST["nachname"] ?? "Unbekannt";

    echo "Hallo $vorname $nachname, du bist super toll!";

    ?>
</body>
</html>