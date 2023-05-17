<?php

class Animal
{
    public $name;
    public $sound;

    public function makeSound()
    {
        echo "Hewan : " . $this->name . "<br>" . " suaranya: " . $this->sound;
    }
}

$animal1 = new Animal();
$animal1->name = "Kucing";
$animal1->sound = "Meow";

$animal1->makeSound();
