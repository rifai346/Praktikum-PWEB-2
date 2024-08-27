<?php

class Mobil{

    public $merk;
    public $warna;

    public function __construct($merk, $warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function deskripsi(){
        echo "Mobil ini merknya $this->merk dan warnanya $this->warna";
    }
}

$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();