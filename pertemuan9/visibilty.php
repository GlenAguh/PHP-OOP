<?php

class produk{
    public    $judul ;
    public    $penulis ;
    public    $penerbit;

    protected $diskon = 0;

    private  $harga ;

    public function __construct($judul ="judul", $penulis ="penulis" , $penerbit="penerbit", $harga = 0)
    {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        
        
    }    

    public function getHarga(){
        return $this -> harga - ( $this-> harga * $this -> diskon / 100 );
    }

    public function getLabel() {
        return "{$this -> penulis}" . "," . "{$this -> penerbit}";
    }


    public function getInfoProduk(){
        $str =  "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    }
}


// Komik
class Komik extends produk{
    public $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0 )
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this -> jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. "  ;
        return $str;
    }
}



// Game
class Game extends produk{
    public $waktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain = 0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this -> waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon ){
        $this -> diskon = $diskon;
    }

    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} jam.";
        return $str;
    }
}


class cetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str ;
    }
}



$produk1 = new Komik("Naruto","Masasshi Kisimoto", "Shone Jump",30000,100);

$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer",250000,50);

echo $produk1 -> getInfoProduk();
echo "<br>";
echo $produk2 -> getInfoProduk();


echo "<hr>";
$produk2 -> setDiskon(50);
echo $produk2 -> getHarga();