<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getInfo()
    {
        return $this->name . " (" . $this->age . ")";
    }
}

$person1 = new Person("Sarah", 25);
$info = $person1->getInfo();

echo $info;
