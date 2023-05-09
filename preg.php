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
    $kalimatString = "saat ini sudah belajar laravel ";
    $cari = "/sudah/";
    $gantikan = "belum";
    echo preg_replace($cari, $gantikan, $kalimatString);
    echo preg_replace("/sudah/", "belum", "karakter spongbob sudah selesai");
    ?>

</body>

</html>