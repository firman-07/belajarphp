<?php

class Vehicle
{
    private $numberPolice;
    private $type;

    public function __construct($numberPolice, $type)
    {
        $this->numberPolice = $numberPolice;
        $this->type = $type;
    }

    public function getNumberPolice()
    {
        return $this->numberPolice;
    }

    public function getType()
    {
        return $this->type;
    }
}

class Parking
{
    private $maxParking;
    private $showVehicleParking;

    public function __construct($maxParking)
    {
        $this->maxParking = $maxParking;
        $this->showVehicleParking = false;
    }

    public function parkVehicle($vehicle)
    {
        $parkedVehicles = $this->getParkedVehicles();

        if (count($parkedVehicles) < $this->maxParking) {
            $parkedVehicles[] = $vehicle;
            $this->saveParkedVehicles($parkedVehicles);
            echo "Kendaraan dengan nomor polisi " . $vehicle->getNumberPolice() . " berhasil diparkir." . PHP_EOL;
        } else {
            echo "Maaf, area parkir sudah penuh." . PHP_EOL;
        }
    }

    public function removeVehicle($numberPolice)
    {
        $parkedVehicles = $this->getParkedVehicles();

        foreach ($parkedVehicles as $key => $vehicle) {
            if ($vehicle->getNumberPolice() === $numberPolice) {
                unset($parkedVehicles[$key]);
                $this->saveParkedVehicles($parkedVehicles);
                echo "Kendaraan dengan nomor polisi " . $numberPolice . " berhasil dikeluarkan dari parkir." . PHP_EOL;
                return;
            }
        }

        echo "Kendaraan dengan nomor polisi " . $numberPolice . " tidak ditemukan dalam parkir." . PHP_EOL;
    }

    public function showVehicleParking()
    {
        $this->showVehicleParking = true; // Set showVehicleParking menjadi true
    }

    public function getStatus()
    {
        $parkedVehicles = $this->getParkedVehicles();
        $totalVehicles = count($parkedVehicles);

        echo "Jumlah total kendaraan yang diparkir: " . $totalVehicles . PHP_EOL . "<br>";

        if ($totalVehicles > 0 && $this->showVehicleParking) {
            echo "Daftar kendaraan yang sedang diparkir:" . PHP_EOL . "<br>";
            foreach ($parkedVehicles as $vehicle) {
                echo "Nomor Polisi: " . $vehicle->getNumberPolice() . ", Tipe Kendaraan: " . $vehicle->getType() . "<br>" . PHP_EOL;
            }
        }
    }

    private function getParkedVehicles()
    {
        if (isset($_SESSION['parkedVehicles'])) {
            return $_SESSION['parkedVehicles'];
        } else {
            return array();
        }
    }

    private function saveParkedVehicles($parkedVehicles)
    {
        $_SESSION['parkedVehicles'] = $parkedVehicles;
    }
}

// Inisialisasi session
session_start();

// Inisialisasi objek parkir dengan kapasitas maksimum 3
$parking = new Parking(3);

// Form handling
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["action"]) && $_POST["action"] === "park") {
        $numberPolice = $_POST["numberPolice"];
        $type = $_POST["type"];
        $vehicle = new Vehicle($numberPolice, $type);
        $parking->parkVehicle($vehicle);
    } elseif (isset($_POST["action"]) && $_POST["action"] === "remove") {
        $numberPolice = $_POST["numberPolice"];
        $parking->removeVehicle($numberPolice);
    } elseif (isset($_POST["action"]) && $_POST["action"] === "showVehicleParking") { // Tambahkan kondisi untuk mengatur showVehicleParking
        $parking->showVehicleParking();
    }
}

// Tampilan
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistem Parkir</title>
</head>

<body>
    <h1>Sistem Parkir</h1>

    <h2>Parkir Kendaraan</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="action" value="park">
        <label for="numberPolice">Nomor Polisi:</label>
        <input type="text" name="numberPolice" required><br>
        <label for="type">Tipe Kendaraan:</label>
        <input type="text" name="type" required><br>
        <input type="submit" value="Parkir">
    </form>

    <h2>Keluarkan Kendaraan</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="action" value="remove">
        <label for="numberPolice">Nomor Polisi:</label>
        <input type="text" name="numberPolice" required><br>
        <input type="submit" value="Keluarkan">
    </form>

    <h2>Status Parkir</h2>
    <?php
    $parking->getStatus();
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="action" value="showVehicleParking">
        <input type="submit" value="Tampilkan Kendaraan yang Diparkir">
    </form>
</body>

</html>