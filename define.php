<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Comments</title>
</head>

<body>

    <?php
    define("fungsi", "ini adalah cetakan hasil fungsi const dari fungsi");
    echo fungsi;

    // Define const array
    define("arraykelas", ["Kelas X", "Kelas XI", "Kelas XII"]);
    echo "Saya adalah"  . arraykelas;

    echo "<br>";

    // Define const function global
    define("name", "Merupakan contoh global fungsi definisi");
    function fungsi()
    {
        echo name;
    }
    fungsi();
    ?>

</body>

</html>