<?php 

class Person{
    public string $name;
    public string $address ;
    public string $country = "Indonesia";

    function sayHello($name){
        if(is_null ($name ) ){
            echo "Hi, my name is {$this -> name}" . PHP_EOL;
        } else{
            echo "Hi $name, my name is {$this -> name}" . PHP_EOL;
        }
    }
}

$person = new Person();
$person -> name = "glen";
$person -> address = "manado";


var_dump($person);

echo "Name : {$person -> name }" . PHP_EOL;
echo "Address : {$person -> address}" . PHP_EOL;
echo "Country : {$person -> country}" . PHP_EOL;


$glen = new Person();
$glen -> name = "Glenn";
$glen -> sayHello("vvt");

$vvt = new Person();
$vvt -> name = "Vvt";
$vvt -> sayHello(null);
