# JOBSHEET 2

## Introduction

Repositori ini menunjukkan konsep inti Pemrograman Berorientasi Objek (OOP) dalam PHP, termasuk **Enkapsulasi**, **Pewarisan**, **Polimorfisme**, dan **Abstraksi**. Konsep-konsep ini penting untuk menulis kode yang bersih, modular, dan dapat digunakan kembali dalam PHP.

## Contents

- [Encapsulation](##Encapsulation)
- [Inheritance](#inheritance)
- [Polymorphism](#polymorphism)
- [Abstraction](#abstraction)

## Encapsulation

Enkapsulasi adalah penggabungan data (atribut) dan metode (fungsi) yang beroperasi pada data ke dalam satu unit atau kelas. Enkapsulasi membatasi akses langsung ke beberapa komponen objek, yang dapat diakses atau dimodifikasi hanya melalui metode yang disediakan oleh kelas.

### Example

```php
class Mahasiswa{
    private $nim;
    private $nama;
    private $jurusan;

    public function __construct($nama,$nim,$jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;

    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }

    public function setJurusan($jurusan){
        $this->jurusan= $jurusan;
    }

    public function getJurusan(){
        return $this->jurusan;
    }

    public function tampilkandata(){
        echo "Nama : " . $this->nama .  "<br>";
        echo "NIM : " . $this->nim .   "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }
}

    $mahasiswa1 = new Mahasiswa ("Andi Prasetyo", "200910614", "Teknik Informatika");
    
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
```

### Results

![image](https://github.com/user-attachments/assets/a4212be9-e102-4324-b5ed-04a795e12b1d)


## Inheritance

Inheritance memungkinkan suatu kelas mewarisi properti dan metode dari kelas lain. Kelas yang mewarisi disebut kelas anak, dan kelas yang diwarisi disebut kelas induk.

### Example

```php
<?php

class pengguna
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

}

class Dosen extends pengguna
{
    private $matakuliah;

    public function __construct($nama,$matakuliah)
    {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    public function getMatakuliah()
    {
        return $this->matakuliah;
    }

    public function setMatakuliah($matakuliah)
    {
        $this->matakuliah = $matakuliah;
    }

}

$dosen = new Dosen ("Joko","Pemrograman Web");

echo $dosen->getNama()."<br>";
echo $dosen->getMatakuliah()."<br>";

?>
```

### Results

![image](https://github.com/user-attachments/assets/fec29951-1969-4fab-8f88-14eac813cbd3)


## Polymorphism

Polimorfisme memungkinkan objek dari kelas yang berbeda diperlakukan sebagai objek dari kelas induk yang sama. Polimorfisme sering kali diimplementasikan melalui penggantian metode, di mana kelas anak dapat memodifikasi atau memperluas fungsionalitas metode kelas induk.

### Example

```php
<?php
class pengguna{

    public function __construct()
    {
        
    }

    public function aksesfitur()
    {
        echo "pengguna"."<br/>";
    }
}

class Dosen extends pengguna{

    public function __construct()
    {
        
    }

    public function aksesfitur()
    {
        echo "Dosen"."<br/>";
    }

}

class Mahasiswa extends pengguna{

    public function __construct()
    {
        
    }

    public function aksesfitur()
    {
        echo "Mahasiswa"."<br/>";
    }

}
$user = [new pengguna(), new Dosen(), new Mahasiswa()];

foreach($user as $u){
    $u->aksesfitur()."<br/>";
}

```

### Results

![image](https://github.com/user-attachments/assets/546e8dc8-dc3e-4812-8bf0-28a4d38f388f)


## Abstraction

Abstraksi adalah konsep menyembunyikan detail implementasi yang rumit dan hanya menampilkan fitur-fitur penting dari objek. Dalam PHP, abstraksi dapat dicapai dengan menggunakan kelas atau antarmuka abstrak.

### Example

```php
<?php

abstract class pengguna{

    abstract public function aksesfitur();
}

class Mahasiswa extends pengguna {

    public function __construct()
    {
        
    }

    public function aksesfitur(){
        return"Mahasiswa";
    }

}

class Dosen extends pengguna {

    public function __construct()
    {
        
    }
    public function aksesfitur(){
        return"Dosen";
    }
}

$user = [new Mahasiswa(), new Dosen()];

foreach($user as $USE){
    echo $USE->aksesfitur()."<br>";
}
```

### Results

![image](https://github.com/user-attachments/assets/49c97cec-2374-4b0a-a20c-9304db6917bb)

