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
        return "{$this -> penulis}" . "," . "{$this -> penerbit}";
    }
    


}

class cetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str ;
    }
}




$produk1 = new produk("Naruto","Masasshi Kisimoto", "Shone Jump",30000);

$produk2 = new produk("Uncharted", "Neil Druckman", "Sony Computer",250000);

echo "Komik : ". $produk1 -> getLabel();
echo "<br>";
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);

echo "<br>";
echo "<br>";

echo "Game : " . $produk2-> getLabel();
echo "<br>";
$infoProduk2 = new cetakInfoProduk();
echo $infoProduk2->cetak($produk2);


