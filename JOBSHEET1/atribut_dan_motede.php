<?php

// Mendefinisikan kelas Buku dengan atribut judul dan penulis
class Buku{
    public $judul;
    public $penulis;

    // Konstruktor untuk menginisialisasi objek Buku dengan judul dan penulis
    public function __construct($judul, $penulis)
    {
        $this->judul= $judul;
        $this->penulis= $penulis;
    }

    // Metode untuk menampilkan informasi tentang buku
    public function tampilkanInfo(){
        return "Buku: $this->judul | $this->penulis";
    }
}

// Membuat objek Buku baru dengan judul "Pemograman PHP" dan penulis "Andi Prasetyo"
$buku1 = new Buku("Pemograman PHP", "Andi Prasetyo");

// Menampilkan informasi buku dengan memanggil metode tampilkanInfo()
echo $buku1->tampilkanInfo();