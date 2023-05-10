<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Loops</title>
</head>

<body>

    <?php
    // Perulangan :

    for ($awal = 1; $awal <= 10; $awal++) {
        echo "Nilai : " . $awal . "<br>";
    }

    echo "<br>";

    // For if

    for ($awal = 1;; $awal++) {
        if ($awal > 10) {
            break;
        }
        echo $awal . "<br>";
    }

    echo "<br>";

    // While

    $whiles = 1;
    while ($whiles <= 10) {
        echo $whiles++ . "<br>";
    }

    echo "<br>";

    // Do While

    $i = 1;
    do {
        echo $i . "";
        $i++;
    } while ($i <= 10);

    echo "<br>";

    // Foreach

    $arrayTeman = array("Kelas X", "Kelas XI", "Kelas XII", "Kelas galulus");
    foreach ($arrayTeman as $array) {
        echo $array . "<br>";
    }
    ?>

</body>

</html>