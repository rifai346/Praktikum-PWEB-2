<?php

// Mendefinisikan kelas dasar 'person' yang akan menjadi blueprint untuk PERSON
class person{

    // Menginisialisasi nama objek dengan nilai yang diberikan
    public $name;
    
    // Konstruktor: Fungsi yang otomatis dijalankan saat objek kelas ini dibuat
    public function __construct($name){
        $this->name = $name;
    }   

    // Metode untuk mendapatkan nama
    public function getName(){
        return $this->name;
    }

    // Metode untuk mengubah nama
    public function setName($name){ 
        $this->name = $name;
    }
} 

// Kelas 'Student' mewarisi semua properti dan metode dari kelas 'person'
class Student extends person{

    // Properti pribadi untuk menyimpan ID mahasiswa
    private $studentID;

    // Memanggil konstruktor kelas induk untuk menginisialisasi nama
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID(){
        return $this->studentID;
    }

    // Meng-override metode getName() untuk memberikan format output yang berbeda
    public function getName() {
        return "Student Name: " . $this->name;
    }

}

// Kelas 'Teacher' mewarisi semua properti dan metode dari kelas 'person'
class Teacher extends person{

    public $teacherID;

    public function __construct($name, $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID(){
        return $this->teacherID;
    }

    public function getName(){
        return "Teacher Name : " .$this->name;
    }
}

// Membuat objek Student
$student = new Student("Alice", "S12345");
echo $student->getName();  // Output: Student Name: Alice
echo "<br>";
echo "Student ID: " . $student->getStudentID();  // Output: Student ID: S12345

echo "<br><br>";

// Membuat objek Teacher
$teacher = new Teacher("Bob", "T67890");
echo $teacher->getName();  // Output: Teacher Name: Bob
echo "<br>";
echo "Teacher ID: " . $teacher->getTeacherID();