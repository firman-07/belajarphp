<?php
class oop
{
    public function publicMethod()
    {
        echo "ini adala oop method public";
    }
    protected function protectedMethod()
    {
        echo "ini adala oop method protected";
    }
    private function privateMethod()
    {
        echo "ini adala oop method private";
    }
    public function accesMethodoop()
    {
        $this->publicMethod();
        echo "<br>";
        $this->protectedMethod();
        echo "<br>";
        $this->privateMethod();
        echo "<br>";
    }
}
$oop = new oop();
$oop->publicMethod();
echo "<br>";
$oop->accesMethodoop();