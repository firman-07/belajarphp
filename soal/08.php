<?php
class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius * $this->radius * 3.14;
    }
}

$circle1 = new Circle(10);
$area = $circle1->calculateArea();

echo "Luas lingkaran = " . $area;
