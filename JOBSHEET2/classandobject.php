<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }   

    public function tampilkandata(){
        echo "Nama : " . $this->nama .  "<br>";
        echo "NIM : " . $this->nim .   "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }

}

$mahasiswa1 = new Mahasiswa ("Andi Prasetyo", "200910614", "Teknik Informatika");
$mahasiswa1->tampilkandata();

?>