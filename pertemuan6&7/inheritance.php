<?php


class produk{
    public    $judul = "judul";
    public    $penulis = "penulis";
    public    $penerbit = "penerbit";
    public    $harga = 0;
    public    $jmlHalaman = 0;
    public    $waktuMain = 0;
    public    $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga,$jmlHalaman,$waktuMain,$tipe)
    {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        $this -> jmlHalaman = $jmlHalaman;
        $this -> waktuMain = $waktuMain;
        $this -> tipe = $tipe;
        
    }    

    public function getLabel() {
        return "{$this -> penulis}" . "," . "{$this -> penerbit}";
    }


    public function getInfoProduk(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    }
}


class Komik extends produk{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk{
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


$produk1 = new Komik("Naruto","Masasshi Kisimoto", "Shone Jump",30000,100,0,"Komik");

$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer",250000,0,50,"Game");

echo $produk1 -> getInfoProduk();
echo "<br>";
echo $produk2 -> getInfoProduk();


