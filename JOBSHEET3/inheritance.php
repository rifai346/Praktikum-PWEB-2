<?php

class person{

    public $name;
    
    public function __construct($name){
        $this->name = $name;
    }   

    public function getName(){
        return $this->name;
    }

    public function setName($name){ 
        $this->name = $name;
    }
} 

class Student extends person{

    private $studentID;

    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID(){
        return $this->studentID;
    }

    public function getName() {
        return "Student Name: " . $this->name;
    }

}

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