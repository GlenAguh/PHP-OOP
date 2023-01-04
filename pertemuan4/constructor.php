<?php


class produk{
    public   $judul = "judul";
    public   $penulis = "penulis";
    public   $penerbit = "penerbit";
    public  $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
    }    

    public function getLabel() {
        return "{$this -> penulis}";
        return "{$this -> penerbit}";
    }

}



$produk1 = new produk("Naruto","Masasshi Kisimoto", "Shone Jump",30000);

$produk2 = new produk("Uncharted", "Neil Druckman", "Sony Computer",250000);




echo "Komik : ". $produk1 -> getLabel();
echo "<br>";
echo "Game : " . $produk2-> getLabel();


