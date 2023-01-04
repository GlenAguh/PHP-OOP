<?php 

class constructor{
    public string $name;
    public ?string $address;
    public string $country = "Indonesia";

    function __constructor(string $name,string $address){
        $this -> name = $name;
        $this -> address = $address;
    }
}

$glen = new constructor("glen","manado");
$glen -> name = "Glenn";
$glen -> address = "manado";

var_dump($glen);

