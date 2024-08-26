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

