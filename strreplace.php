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
    $karakter = "belajar php menggunakan karakter$karakter(saya firman)";
    echo "karekter sebelum di ubah: ", $karakter;
    echo "karekter setelah di ubah: ", str_replace($karakter, "strlen,", "str_replace");
    ?>

</body>

</html>