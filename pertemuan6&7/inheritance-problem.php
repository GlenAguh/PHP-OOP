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

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if( $this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if( $this->tipe == "Game" ){
            $str .= " ~  {$this -> waktuMain} Jam.";
        }
        return $str;
    }

}

class cetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str ;
    }
}


$produk1 = new produk("Naruto","Masasshi Kisimoto", "Shone Jump",30000,100,0,"Komik");

$produk2 = new produk("Uncharted", "Neil Druckman", "Sony Computer",250000,0,50,"Game");

echo $produk1 -> getInfoLengkap();
echo "<br>";
echo $produk2 -> getInfoLengkap();


