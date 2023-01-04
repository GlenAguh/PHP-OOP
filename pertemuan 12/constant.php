<?php 

// define('NAMA', 'Glenn');
// echo NAMA;

// echo "<br>";

// const UMUR = 18;
// echo UMUR;


// class coba{
//     const NAMA = 'Glenn';
// }
// echo coba::NAMA; 


// echo __LINE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";

class Coba{
   public $kelas = __CLASS__;
}
$obj = new coba;
echo $obj-> kelas; 

echo "<hr>";

function coba(){
    return __FUNCTION__;
}
echo coba();


?>