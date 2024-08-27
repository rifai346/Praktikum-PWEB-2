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