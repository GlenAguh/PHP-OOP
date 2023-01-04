<?php 

require 'App/init.php';

// $produk1 = new Komik("Naruto","Masasshi Kisimoto", "Shone Jump",30000,100);

// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer",250000,50);


// $cetakProduk = new cetakInfoProduk();
// $cetakProduk-> tambahProduk($produk1);
// $cetakProduk-> tambahProduk($produk2);
// echo $cetakProduk->cetak();




use App\service\User as servicesUser;
use App\produk\User as produkUser;

new servicesUser();
echo "<br>";
new produkUser();


