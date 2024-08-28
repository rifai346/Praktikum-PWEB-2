<?php

// Mendefinisikan kelas Mahasiswa dengan atribut nama, nim, dan jurusan

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi objek Mahasiswa dengan nama, nim, dan jurusan
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkandata() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }

    // Metode untuk mengupdate jurusan mahasiswa
    public function Updatejurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode setter untuk mengubah nilai NIM mahasiswa
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Metode getter untuk mendapatkan nilai NIM mahasiswa
    public function getNim() {
        return $this->nim;
    }

    // Metode setter untuk mengubah nilai jurusan mahasiswa
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode getter untuk mendapatkan nilai jurusan mahasiswa
    public function getJurusan() {  
        return $this->jurusan;
    }
}

// Mendefinisikan kelas Dosen dengan atribut nama, nip, dan matakuliah
class Dosen {
    public $nama;
    public $nip;
    public $matakuliah;

    // Konstruktor untuk menginisialisasi objek Dosen dengan nama, nip, dan mata kuliah
    public function __construct($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIP : " . $this->nip . "<br>";
        echo "Matakuliah : " . $this->matakuliah . "<br>";
    }

}

// Membuat objek Dosen baru dengan nama "Joko", nip "123", dan mata kuliah "Pemrograman Web"
$dosen1 = new Dosen("Joko", "123", "Pemrograman Web");
// Memanggil metode tampilkanDosen() pada objek $dosen1 untuk menampilkan informasi dosen
$dosen1->tampilkanDosen() ;

echo "<br>";

// Membuat objek Mahasiswa baru dengan nama "Dedi", nim "123", dan jurusan "Teknik Informatika"
$mahasiswa = new Mahasiswa("Dedi", "123", "Teknik Informatika");
$mahasiswa->tampilkandata();

// Mengubah NIM mahasiswa dengan nilai baru "456" menggunakan metode setter
$mahasiswa->setNim("456");
// Menampilkan NIM mahasiswa yang telah diubah menggunakan metode getter
echo "Update NIM :" .$mahasiswa->getNim()."<br>";

// Mengubah jurusan mahasiswa dengan nilai baru "Teknik Mesin" menggunakan metode setter
$mahasiswa->setJurusan("Teknik Mesin");
// Menampilkan jurusan mahasiswa yang telah diubah menggunakan metode getter
echo "Update Jurusan :" .$mahasiswa->getJurusan()."<br>";

?>