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
    $kalimat = "Aku sedang berada pada materi string preg_match().";
    $pola = "/preg_match/";
    $Mengganti = "preg_replace";
    echo preg_replace($pola, $Mengganti, $kalimat);
    ?>
    <?php
    $kalimat = "Aku telah melalui pembelajaran javascript";
    $pola = "/javascript/";
    $Mengganti = "php";
    echo preg_replace($pola, $Mengganti, $kalimat);
    ?>

</body>

</html>