<?php

// Class Person sebagai kelas dasar
class person {

    public $name;

    // Konstruktor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Mengembalikan nilai name
    public function getName() { 
        return $this->name;
    }

    // Mengatur nilai name
    public function setName($name){
        $this->name = $name;
    }

    // Mengembalikan role sebagai 'Person'
    public function getRole(){
        return "I am a person";
    }
}

// Class Student yang mewarisi class Person
class Student extends person {

    private $studentID;

    // Konstruktor untuk inisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Mengembalikan nilai studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Mengatur nilai studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override getName untuk menampilkan nama student
    public function getName() {
        return "Student Name: " . parent::getName();
    }
    
}

// Class Teacher yang mewarisi class Person
class Teacher extends person {

    private $teacherID; 

    // Konstruktor untuk inisialisasi nama dan teacherID
    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Mengembalikan nilai teacherID dengan format khusus
    public function getTeacherID() {
        return "Teacher Name : " .$this->teacherID;
    }

    // Override getName untuk menampilkan nama teacher
    public function getName(){
        return "Teacher Name : " .parent::getName();
    }
}

// Abstract class Course
abstract class Course {

    // Metode abstrak yang harus diimplementasikan oleh turunan kelas
    abstract public function getCourseDetails();
}

// Class OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {

    // Implementasi getCourseDetails untuk kursus online
    public function getCourseDetails() {
        return "I am an online course";
    }
}

// Class OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {

    // Implementasi getCourseDetails untuk kursus offline
    public function getCourseDetails() {
        return "I am an offline course";
    }
}

// Class Dosen yang mewarisi class Person
class Dosen extends person {

    private $nidn;

    // Konstruktor untuk inisialisasi nama dan nidn
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }   

    // Mengembalikan nilai nidn
    public function getNidn() {
        return $this->nidn;
    }

    // Mengatur nilai nidn
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Override getName untuk menampilkan nama dosen
    public function getName() {
        return "Dosen Name : " .parent::getName();
    }

    // Override getRole untuk menampilkan role sebagai teacher
    public function getRole() {
        return "I am a teacher";
    }
}

// Class Mahasiswa yang mewarisi class Person
class Mahasiswa extends person {

    private $nim;

    // Konstruktor untuk inisialisasi nama dan nim
    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Mengembalikan nilai nim
    public function getNim() {
        return $this->nim;
    }

    // Mengatur nilai nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Override getName untuk menampilkan nama mahasiswa
    public function getName() {
        return "Mahasiswa Name : " .parent::getName();
    }

    // Override getRole untuk menampilkan role sebagai student
    public function getRole() { 
        return "I am a student";
    }
}

// Abstract class Jurnal
abstract class jurnal {

    protected $judul;
    protected $penulis;

    // Konstruktor untuk inisialisasi judul dan penulis
    public function __construct($judul, person $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // Metode abstrak untuk mendapatkan detail jurnal
    abstract public function getJurnalDetails();
}

// Class JurnalDosen yang mengimplementasikan Jurnal
class jurnalDosen extends jurnal {

    // Konstruktor untuk inisialisasi judul dan penulis yang berupa Dosen
    public function __construct($judul, Dosen $penulis) {
        parent::__construct($judul, $penulis);
    }

    // Implementasi getJurnalDetails untuk jurnal dosen
    public function getJurnalDetails() {
        return "Judul jurnal: " . $this->judul . "<br>" .
               "Penulis jurnal: " . $this->penulis->getName() . "<br>" .
               "Dengan " . $this->penulis->getNidn(); 
    }
}

// Class JurnalMahasiswa yang mengimplementasikan Jurnal
class jurnalMahasiswa extends jurnal {

    // Konstruktor untuk inisialisasi judul dan penulis yang berupa Mahasiswa
    public function __construct($judul, Mahasiswa $penulis) {
        parent::__construct($judul, $penulis);
    }

    // Implementasi getJurnalDetails untuk jurnal mahasiswa
    public function getJurnalDetails() {
        return "Judul jurnal: " . $this->judul . "<br>" .
               "Penulis jurnal: " . $this->penulis->getName() . "<br>" .
               "Dengan " . $this->penulis->getNim();
    }
}
// instansiasi objek dari class Person
$name = new Person("Muhammad Rifa'i");
// menampilkan data dari class Person
echo $name->getName() . "<br>";
echo $name->getRole() . "<br><br>";

// instansiasi objek dari class Student
$nama2 = new Student("mikel",230200000);
// mengambil data nama dan student id dari class Student menggunakan setter
echo $nama2->setName("rifai") . "<br>";
echo $nama2->setStudentID(230202016);
// menampilkan data nama dan student id dari class Student menggunakan getter
echo $nama2->getName() . "<br>";
echo $nama2->getStudentID() . "<br><br>";


// instansiasi objek dari class Teacher
$teacher = new  Teacher("Mr. mikhael", 3000000);
// menampilkan data nama dan teacher id dari class Teacher
echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID(). "<br><br>";

// instansiasi objek dari class Online Course
$course = new OnlineCourse();
echo $course->getCourseDetails() . "<br>"; //menampilkan data dari methode getCourseDetails dari class OnlineCourse

// instansiasi objek dari class Offline Course
$course2 = new OfflineCourse();
echo $course2->getCourseDetails() . "<br>"; //menampilkan data dari methode getCourseDetails dari class OfflineCourse

// intansiasi objek dari class Dosen
$dosen = new Dosen("budiman", 123456789);

// mengambil data nama dan nidn dari class dosen menggunakan setter
echo $dosen->setName("dendi") . "<br>";
echo $dosen->setNidn(26) . "<br>";

// menampilkan data nama dan nidn dari class Dosen menggunakan getter
echo $dosen->getNidn() . "<br>";
echo $dosen->getName() . "<br>";
echo $dosen->getRole() . "<br>";

// instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Alfito", 230202002);

// mengambil data nama dan nim dari class mahasiswa menggunakan setter
echo $mahasiswa->setName("bikra") . "<br>";
echo $mahasiswa->setNim(230202006) . "<br>";

// menampilkan data dari class Mahasiswa menggunakan getter
echo $mahasiswa->getNim() . "<br>";
echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getRole() . "<br><br>";

// instansiasi objek dari class jurnal dosen
$jurnal  = new JurnalDosen("Implementasi Pemrograman Web", $dosen);
echo $jurnal->getJurnalDetails(). "<br><br>"; //menampilkan hasil

// instansiasi objek dari class jurnal mahasiswa
$jurnal2 = new JurnalMahasiswa("Pembuatan Kerangka bij Besi", $mahasiswa);
echo $jurnal2->getJurnalDetails();


?>