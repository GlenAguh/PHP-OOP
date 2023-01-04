<?php 

class constant{

    const AUTHOR = "Belajar PHP OOP";

    function info(){
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    
    }

    
}

const APP_VERSION = "1.0.0";
echo APP_VERSION . PHP_EOL;

echo constant::AUTHOR . PHP_EOL;

$glen  = new constant();
$glen -> name = "Glenn";

$vvt = new constant();
$vvt -> name = "Vvt";

$glen -> info();
$vvt -> info(); 



?>