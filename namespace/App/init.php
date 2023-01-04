<?php 

// require 'produk/infoProduk.php';
// require 'produk/produk.php';
// require 'produk/Komik.php';
// require 'produk/Game.php';
// require 'produk/cetakInfoProduk.php';
// require 'produk/User.php';

// require 'services/User.php';



spl_autoload_register(function ($class){
    $class = explode('\\' , $class);
    $class = end($class);
    require __DIR__ . '/produk/' . $class . '.php';
});


spl_autoload_register(function ($class){
    $class = explode('\\' , $class);
    $class = end($class);
    require __DIR__ . '/services/' . $class . '.php';
});