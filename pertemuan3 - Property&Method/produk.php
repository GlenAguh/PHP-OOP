<?php


class produk{
    public  string $judul = "judul";
    public  string $penulis = "penulis";
    public  string $penerbit = "penerbit";
    public  $harga = 0;


    public function getLabel( ) {
        return "{$this -> penulis}";
        return "{$this -> penerbit}";
    }

}

// $produk1 = new produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2 -> judul = "Downhill";
// $produk2 -> tambahProperty = "Glenn";
// var_dump($produk2);


$produk3 = new produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Masasshi Kisimoto";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 30000;


$produk4 = new produk();
$produk4 -> judul = "Uncharted";
$produk4 -> penulis = "Neil Druckman";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 250000;

echo "Komik : ". $produk3 -> getLabel();
echo "<br>";
echo "Game : " . $produk4-> getLabel();

// class Fruit
// {
//     // Properties
//     public $name;
//     public $color;

//     // Methods
//     function set_name($name)
//     {
//         $this->name = $name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
// }

// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');

// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
