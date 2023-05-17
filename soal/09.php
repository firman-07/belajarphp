

 

<?php
class Car
{
    public $brand;
    public $year;

    function __construct($brand, $year)
    {
        $this->brand = $brand;
        $this->year = $year;
    }

    function getInfo()
    {
        return "Merk : " . $this->brand . "<br>Tahun Produksi : " . $this->year;
    }
}

$car1 = new Car("Toyota", 2020);
echo $car1->getInfo();
?>