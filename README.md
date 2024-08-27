# JOBSHEET 1

## Introduction

Repositori ini menjelaskan tentang Object-Oriented Programming (OOP) dalam php, yang didalamnya terdapat **Atribut & Method**, **Kelas & Objek**. Konsep-konsep ini penting didalam (OOP).

## Contents

- [Atribut & Method](##Atribut&Method)
- [Kelas & Objek](#Kelas&Objek)
- [Implementasi OOP](#ImplementasiOOP)

## Atribut & Method

Atribut adalah variabel yang didefinisikan dalam sebuah kelas dan digunakan untuk menyimpan data atau informasi tentang objek. Dalam konteks OOP, atribut juga dikenal sebagai properties atau fields.
Method adalah blok kode yang terkait dengan class dan digunakan untuk mendefinisikan aksi yang dapat dilakukan oleh object.

### Examples
```php
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
```

### results
![image](https://github.com/user-attachments/assets/4f0ed7bd-6c84-4f76-84a4-03da8451ef25)

## Kelas & Objek

Kelas adalah blueprint atau template untuk membuat objek.
Objek adalah instansiasi konkret dari sebuah kelas.

### Examples
```php
<?php

// Mendefinisikan kelas Mobil dengan atribut merk dan warna
class Mobil{

    public $merk;
    public $warna;


     // Konstruktor untuk menginisialisasi objek Mobil dengan merk dan warna
    public function __construct($merk, $warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Metode untuk menampilkan deskripsi mobil
    public function deskripsi(){
        echo "Mobil ini merknya $this->merk dan warnanya $this->warna";
    }
}

// Membuat objek Mobil baru dengan merk "Toyota" dan warna "Hitam"
$mobil1 = new Mobil("Toyota", "Hitam");

// Memanggil metode deskripsi() pada objek $mobil1 untuk menampilkan informasi mobil
echo $mobil1->deskripsi();
```

### Results
![image](https://github.com/user-attachments/assets/ccb5b067-506b-4091-a2da-4e7bd200f31e)


## Implementasi OOP

Contoh Pengimplementasian Konsep dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta
menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction.

### Example
```php
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
```

### Results
![image](https://github.com/user-attachments/assets/0604b176-ae16-4abb-85e3-7a55a9e55732)

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

