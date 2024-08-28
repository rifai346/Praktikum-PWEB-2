<?php
class pengguna {
    // Konstruktor kosong, tidak melakukan inisialisasi apa-apa
    public function __construct() {
    }

    // Metode untuk mengakses fitur umum pengguna
    public function aksesfitur() {
        echo "pengguna<br/>";
    }
}

class Dosen extends pengguna {
    // Konstruktor kosong, mewarisi konstruktor dari kelas induk
    public function __construct() {
        parent::__construct();
    }

    // Meng-override metode aksesfitur untuk dosen
    public function aksesfitur() {
        echo "Dosen<br/>";
    }
}

class Mahasiswa extends pengguna {
    // Konstruktor kosong, mewarisi konstruktor dari kelas induk
    public function __construct() {
        parent::__construct();
    }

    // Meng-override metode aksesfitur untuk mahasiswa
    public function aksesfitur() {
        echo "Mahasiswa<br/>";
    }
}

// Membuat array objek dari berbagai jenis pengguna
$user = [new pengguna(), new Dosen(), new Mahasiswa()];

// Mengulang setiap objek dalam array dan memanggil metode aksesfitur()
foreach ($user as $u) {
    $u->aksesfitur() . "<br/>";
}