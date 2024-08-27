<?php

class person {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() { 
        return $this->name;
    }

    public function getRole(){

        return "I am a person";
    }
}

class Dosen extends person {

    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }   

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getRole() {

        return "I am a teacher";
    }
}