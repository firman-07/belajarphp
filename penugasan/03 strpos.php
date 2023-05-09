<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar PHP</title>
</head>

<body>
    <?php
    //no 1
    echo "1.A berhasil :" . strpos("saya sudah memncapai materi php", "php");
    echo "\n";
    echo "B. tidak berhasil :" . strpos("saya sudah memncapai materi php", "javascript");
    //no2
    echo "2.A berhasil :" . strpos("Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos", "belajar php string");
    echo "\n";
    echo "B. tidak berhasil :" . strpos("Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos", "strlen");
    ?>
</body>

</html>