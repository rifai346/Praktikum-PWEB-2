<?php
class Jurnal{

    public $dosen;
    public $mahasiswa;

    public function __construct($dosen, $mahasiswa)
    {
        $this->Dosen = $dosen;
        $this->Mahasiswa = $mahasiswa;

    }

    public function tambahdata(){
        return $this->dosen;
    }
}