<?php

class pengguna
{
    // Properti yang dilindungi (protected) untuk menyimpan nama pengguna
    protected $nama;

    // Konstruktor: Method yang otomatis dipanggil saat objek dibuat
    public function __construct($nama)
    {
        // Mengisi nilai properti $nama dengan nilai yang diberikan saat membuat objek
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai nama pengguna
    public function getNama()
    {
        return $this->nama;
    }
}

class Dosen extends pengguna
{
    // Properti pribadi (private) untuk menyimpan mata kuliah yang diajar
    private $matakuliah;

    // Konstruktor: Memanggil konstruktor induk untuk menginisialisasi properti $nama
    public function __construct($nama, $matakuliah)
    {
        // Memanggil konstruktor induk dengan nilai $nama
        parent::__construct($nama);
        // Mengisi nilai properti $matakuliah dengan nilai yang diberikan
        $this->matakuliah = $matakuliah;
    }

    // Metode untuk mendapatkan nilai mata kuliah yang diajar
    public function getMatakuliah()
    {
        return $this->matakuliah;
    }

    // Metode untuk mengubah nilai mata kuliah yang diajar
    public function setMatakuliah($matakuliah)
    {
        $this->matakuliah = $matakuliah;
    }
}

// Membuat objek dosen dengan nama "Joko" dan mata kuliah "Pemrograman Web"
$dosen = new Dosen("Joko", "Pemrograman Web");

// Menampilkan nama dan mata kuliah dosen
echo $dosen->getNama() . "<br>";
echo $dosen->getMatakuliah() . "<br>";