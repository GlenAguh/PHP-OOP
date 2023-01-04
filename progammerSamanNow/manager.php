<?php 

// Inheritance
class manager{
    public string $name;

    function sayHello(string $name):void
    {
        echo "Hi $name, My name is {$this -> name}" . PHP_EOL;

    }
}

class VicePresident extends manager{
    
}
$manager = new manager();
$manager -> name = "Glenn";
$manager -> sayHello("vt");

$vp = new VicePresident();
$vp -> name = "Vt";
$vp-> sayHello("Glen");
