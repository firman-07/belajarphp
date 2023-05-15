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
    //back to null
    $namaLengkap = '';
    $kelas = '';

    //definisi notipikasi error
    $namaLengkapError = '';
    $kelasError = '';

    function dataType($dataKelas)
    {
        $inputData = trim($dataKelas);
        $inputData = htmlspecialchars($dataKelas);
        return $inputData;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        if (empty($_POST['namaLengkap'])) {
            $namaLengkapError = "nama lengkap tidak boleh kosong, harus di isi";
        } else {
            $namaLengkap = dataType($_POST['namaLengkap']);
        }
        if (empty($_POST['kelas'])) {
            $kelasError = "nama kelas tidak boleh kosong, harus di isi";
        } else {
            $kelas = dataType($_POST['kelas']);
        }
    }

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name=" namaLengkap" placeholder="masukan nama anda" />
            <span style="color:red; font-size:15px;"><?php echo $namaLengkapError; ?></span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">kelas</label>
            <input type="number" id="kelas" name=" kelas" placeholder="masukan kelas anda" />
            <span style="color:red; font-size:15px;"><?php echo $kelasError; ?> </span>
        </div>
        <input type="submit" value="Simpan nama">
    </form>

    <?php
    echo "<br>";
    echo "Nama Lengkap saya "  . $namaLengkap;
    echo "<br>";
    echo "kelas saya "  . $kelas;
    ?>
    <?php echo "Today is" . date("d m y");
    echo "<br>";
    ?>
    <?php include './include.php';
    echo "<br>";
    ?>
    <?php include '../form percobaan/include copy.php'; ?>
</body>

</html>