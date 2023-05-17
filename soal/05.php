<?php

class Student1
{
    public $name1;
    public $age1;

    public function __construct($name1, $age1)
    {
        $this->name1 = $name1;
        $this->age1 = $age1;
    }

    public function introduce()
    {
        echo "Name: " . $this->name1;
        echo "<br>" . "Age: " . $this->age1;
    }
}

$student1 = new Student1("John", 20);
$student1->introduce();
