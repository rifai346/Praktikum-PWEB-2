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
