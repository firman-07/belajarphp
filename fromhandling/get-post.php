<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM HANDLING</title>
</head>

<body>
    <!-- <form action="./get-data.php" method="GET">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="masukan kelas anda" />
        </div>
        <input type="submit" value="Simpan nama">
    </form> -->
    <form action="./get-data.php" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="masukan kelas anda" />
        </div>
        <input type="submit" value="Simpan nama">
    </form>
</body>

</html>