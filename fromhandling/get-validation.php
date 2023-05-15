<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM HANDLING</title>
</head>

<body>
    <?php
    $namaLengkap = '';
    $kelas = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $namaLengkap = dataType($_POST['namaLengkap']);
        $kelas = dataType($_POST['kelas']);
    }
    function dataType($datakelas)
    {
        $inputData = trim($datakelas);
        $inputData = stripslashes($datakelas);
        $inputData = htmlspecialchars($datakelas);
        return $inputData;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name=" namaLengkap" placeholder="masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">kelas</label>
            <input type="number" id="kelas" name=" kelas" placeholder="masukan kelas anda" />
        </div>
        <input type="submit" value="Simpan nama">
    </form>

    <?php
    echo "<br>";
    echo "Nama Lengkap saya "  . $namaLengkap;
    echo "<br>";
    echo "kelas saya "  . $kelas;
    ?>
</body>

</html>