<?php 

// require 'produk/infoProduk.php';
// require 'produk/produk.php';
// require 'produk/Komik.php';
// require 'produk/Game.php';
// require 'produk/cetakInfoProduk.php';


spl_autoload_register(function ($class){
    require __DIR__ . '/produk/' . $class . '.php';
}); 