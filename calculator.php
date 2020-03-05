<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1><strong>Calculator</strong></h1>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="eerstenummer" required>
        <label><strong>First Number</strong></label><br><br>
        <input type="number" name="tweedenummer" required>
        <label><strong>Second Number</strong></label><br><br>

        <input name="berekening" type="submit" value="Add">
        <input name="berekening" type="submit" value="Subtract">
        <input name="berekening" type="submit" value="Multiply">
        <input name="berekening" type="submit" value="Divide">
        <input name="berekening" type="submit" value="Modulo">
    </form>

    <?php

    $eerstenummer = $_POST['eerstenummer'];
    $tweedenummer = $_POST['tweedenummer'];
    $berekening = $_POST['berekening'];
    $eindnummer = '';

    switch ($berekening) {
    case "Add":
        $eindnummer = $eerstenummer + $tweedenummer;
        break;
    case "Subtract":
        $eindnummer = $eerstenummer - $tweedenummer;
        break;
    case "Multiply":
        $eindnummer = $eerstenummer * $tweedenummer;
        break;
    case "Divide":
        $eindnummer = $eerstenummer / $tweedenummer;
    case "Modulo":
        $eindnummer = $eerstenummer % $tweedenummer;
        break;  
    }
    echo $eindnummer;
    ?>
</body>

</html>