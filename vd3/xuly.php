<?php

$mang = array("yellow", "green", "red", "black");
//               0         1       2      3

$ten = $_POST["ten"];
$namsinh = $_POST["namsinh"];

$tuoi = 2019 - $namsinh;
$r = rand(0, count($mang) - 1 );

$kq = new Data($ten, $namsinh, $tuoi, $mang[$r]);
echo json_encode($kq);

class Data{
    public $Ten;
    public $NamSinh;
    public $Tuoi;
    public $Mau;
    function __construct($t, $n, $y, $m){
        $this->Ten = $t;
        $this->NamSinh = $n;
        $this->Tuoi = $y;
        $this->Mau = $m;
    }
}


?>