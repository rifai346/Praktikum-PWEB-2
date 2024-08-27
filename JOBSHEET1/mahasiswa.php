<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkandata() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }

    public function Updatejurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function getJurusan() {  
        return $this->jurusan;
    }
}

class Dosen {
    public $nama;
    public $nip;
    public $matakuliah;

    public function __construct($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    public function tampilkanDosen() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIP : " . $this->nip . "<br>";
        echo "Matakuliah : " . $this->matakuliah . "<br>";
    }

}

$dosen1 = new Dosen("Joko", "123", "Pemrograman Web");
$dosen1->tampilkanDosen() ;

echo "<br>";

$mahasiswa = new Mahasiswa("Dedi", "123", "Teknik Informatika");
$mahasiswa->tampilkandata();

$mahasiswa->setNim("456");
echo "Update NIM :" .$mahasiswa->getNim()."<br>";

$mahasiswa->setJurusan("Teknik Mesin");
echo "Update Jurusan :" .$mahasiswa->getJurusan()."<br>";

?>