<?php

class Rectangle
{
    public $length;
    public $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}

$rectangle1 = new Rectangle(5, 8);

$area = $rectangle1->calculateArea();

echo "Persegi panjang dengan luas = " . $area . "<br>";
