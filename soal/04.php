<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP form handing</title>
</head>

<body>
    <?php

    // back to null
    $username  = "";
    $password = '';

    // message error required
    $usernameError = '';
    $passwordError = '';


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // $username = dataType($_POST['username']);
        // $kelas = dataType($_POST['kelas']);
        if (empty($_POST['username'])) {
            $usernameError = "Nama Lengkap tidak boleh kosong, harus diisikan.";
        } elseif (empty($_POST['password'])) {
            $username = "";
        } else {
            $username = dataType($_POST['username']);
        }
        if (empty($_POST['password'])) {
            $passwordError = "password tidak boleh kosong, harus diisikan.";
        } elseif (empty($_POST['username'])) {
            $username = "";
        } else {
            $password = dataType($_POST['password']);
        }
    }

    function dataType($datapassword)
    {
        $inputData = trim($datapassword);
        $inputData = stripslashes($datapassword);
        $inputData = htmlspecialchars($datapassword);
        return $inputData;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="USERNAME">USERNAME</label>
            <input type="TEXT" id="USERNAME" name="username" placeholder="Masukan nama anda" />
            <span style="color: red; font-size:12px"><?php echo $usernameError; ?></span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="password">password</label>
            <input type="Text" id="password" name="password" placeholder="masukkan password anda" />
            <span style="color: red; font-size:12px"><?php echo $passwordError; ?></span>
        </div>
        <input type="submit" value="Simpan">
    </form>

    <?php
    echo "<br>";
    echo "Nama Lengkap Saya " . $username;
    echo "<br>";
    echo "password saya " . $password;
    ?>

</body>

</html>