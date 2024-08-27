<?php

class Buku{
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul= $judul;
        $this->penulis= $penulis;
    }

    public function tampilkanInfo(){
        return "Buku: $this->judul | $this->penulis";
    }
}

$buku1 = new Buku("Pemograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo();