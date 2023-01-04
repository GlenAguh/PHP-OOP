<?php 
class destructor{
    public string $name;
    public ?string $address;
    public string $country = "Indonesia";

    function __constructor(string $name,string $address){
        $this -> name = $name;
        $this -> address = $address;
    }

    function __destruct()
    {
        echo "Object person {$this-> name} is destroyed" . PHP_EOL;

    }
}

$glen = new destructor("glen","manado");
$glen -> name = "Glenn";
$glen -> address = "manado";

$vt = new destructor("vt", "manado");
$vt -> name = "vt";
$vt -> address = "manado";
echo "Program selesai " . PHP_EOL;

?>