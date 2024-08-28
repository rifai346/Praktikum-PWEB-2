<?php

class Mahasiswa {
    // Deklarasi properti (atribut) untuk menyimpan data mahasiswa
    public $nama;  // Nama mahasiswa
    public $nim;   // Nomor Induk Mahasiswa
    public $jurusan; // Jurusan mahasiswa

    // Konstruktor: Method khusus yang akan dijalankan saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Inisialisasi nilai properti dengan data yang diberikan saat membuat objek
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkandata() {
        // Menampilkan nilai properti ke layar menggunakan echo
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }
}

// Membuat objek mahasiswa baru dengan data tertentu
$mahasiswa1 = new Mahasiswa("Andi Prasetyo", "200910614", "Teknik Informatika");

// Memanggil method tampilkandata() untuk menampilkan data mahasiswa
$mahasiswa1->tampilkandata();

?>