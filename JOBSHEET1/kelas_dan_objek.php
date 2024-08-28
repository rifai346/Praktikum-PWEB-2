<?php

// Mendefinisikan kelas Mobil dengan atribut merk dan warna
class Mobil{

    public $merk;
    public $warna;


     // Konstruktor untuk menginisialisasi objek Mobil dengan merk dan warna
    public function __construct($merk, $warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Metode untuk menampilkan deskripsi mobil
    public function deskripsi(){
        echo "Mobil ini merknya $this->merk dan warnanya $this->warna";
    }
}

// Membuat objek Mobil baru dengan merk "Toyota" dan warna "Hitam"
$mobil1 = new Mobil("Toyota", "Hitam");

// Memanggil metode deskripsi() pada objek $mobil1 untuk menampilkan informasi mobil
echo $mobil1->deskripsi();