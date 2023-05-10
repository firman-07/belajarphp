<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>

    <?php
    $nilai = 78;

    if ($nilai <= 75) {
        echo "kmu sudah di atas kkm";
    } else {
        echo "kmu di bawah kkm";
    }

    echo "<br>";

    $waktu = 10;
    if ($waktu <= 10) {
        echo "selamat pagi";
    } else {
        echo "selamat siang";
    }

    echo "<br>";
    //ifelse
    $nilaitugas = 70;
    if ($nilaitugas <= 90) {
        echo "selamat, kmu nilainya bagus!(A)";
    } elseif ($nilaitugas >= 85) {
        echo "selamat, kmu nilainya cukup bagus!(A-)";
    } elseif ($nilaitugas >= 80) {
        echo "selamat, kmu nilainya bagus!(B)";
    } elseif ($nilaitugas >= 85) {
        echo "selamat, kmu nilainya kurang bagus!(C)";
    }
    echo "<br>";
    //swict
    $hari = "";
    switch ($hari) {
        case "senin";
            echo "hari ini adalah senin";
            break;
        case "selasa";
            echo "hari ini adalah senin";
            break;
        case "rabu";
            echo "hari ini adalah rabu";
            break;
        case "kamis";
            echo "hari ini adalah kamis";
            break;
        case "jumat";
            echo "hari ini adalah jumat";
            break;
        default;
            echo "hari ini adalah libur jangan ganggu ya !";
            break;
    }
    echo "<br>";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "my_user", "my_password", "world");

    $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

    $result = $mysqli->query($query);

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
    }
    ?>

</body>

</html>