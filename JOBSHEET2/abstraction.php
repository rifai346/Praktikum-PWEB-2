<?php
abstract class pengguna {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function aksesfitur();
}

class Mahasiswa extends pengguna {
    // Konstruktor kosong
    public function __construct() {
    }

    // Implementasi metode aksesfitur untuk mahasiswa
    public function aksesfitur() {
        return "Mahasiswa";
    }
}

class Dosen extends pengguna {
    // Konstruktor kosong
    public function __construct() {
    }

    // Implementasi metode aksesfitur untuk dosen
    public function aksesfitur() {
        return "Dosen";
    }
}

// Membuat array objek dari berbagai jenis pengguna
$user = [new Mahasiswa(), new Dosen()];

// Mengulang setiap objek dalam array dan memanggil metode aksesfitur()
foreach ($user as $USE) {
    echo $USE->aksesfitur() . "<br>";
}