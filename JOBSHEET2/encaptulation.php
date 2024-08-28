<?php

// Deklarasi properti (atribut) dengan akses private
class Mahasiswa{
    private $nim;
    private $nama;
    private $jurusan;

    // Konstruktor: Method khusus untuk inisialisasi objek
    public function __construct($nama,$nim,$jurusan)
    {
        // Mengisi nilai properti dengan data yang diberikan saat membuat objek
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;

    }

    // Metode setter dan getter untuk mengakses dan mengubah nilai properti secara terkendali
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    // Metode setter dan getter untuk mengakses dan mengubah nilai properti secara terkendali
    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }

    // Metode setter dan getter untuk mengakses dan mengubah nilai properti secara terkendali
    public function setJurusan($jurusan){
        $this->jurusan= $jurusan;
    }

    public function getJurusan(){
        return $this->jurusan;
    }

     // Metode untuk menampilkan data mahasiswa
    public function tampilkandata(){
        echo "Nama : " . $this->nama .  "<br>";
        echo "NIM : " . $this->nim .   "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }
}

    // Membuat objek mahasiswa baru
    $mahasiswa1 = new Mahasiswa ("Andi Prasetyo", "200910614", "Teknik Informatika");
    
    // Mengakses data menggunakan getter
    echo "Mengakses data menggunakan getter:<br>";
    echo "Nama: " . $mahasiswa1->getNama() . "<br>";
    echo "NIM: " . $mahasiswa1->getNim() . "<br>";
    echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br><br>";

    // Mengubah data menggunakan metode setter
    $mahasiswa1->setNama("Siti Aminah");
    $mahasiswa1->setNim("987654321");
    $mahasiswa1->setJurusan("Sistem Informasi");

    // Menampilkan data yang telah diubah menggunakan metode getter dan tampilkanData
    echo "Data setelah diubah:<br>";
    $mahasiswa1->tampilkanData();



