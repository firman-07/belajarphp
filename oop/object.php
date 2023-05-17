<?php
class dealerCar
{
    public $nameCar;
    public $capacity;

    function buyCar()
    {
        echo "Mobil Tersedia, Silahkan Beli.";
    }
    function typeCar()
    {
        echo "Tersedia, pilihan Mobil.";
    }
}
//cara 1
$buy = new dealerCar();
$buy->buyCar();
echo "<br>";
$buy->nameCar = "BMW 2023";
echo "<br>";
$buy->capacity = 3;
echo "<br>";
//cara ke 2
echo "berhasil membeli " . $buy->nameCar . 'dengan kapasitas' . $buy->capacity;
