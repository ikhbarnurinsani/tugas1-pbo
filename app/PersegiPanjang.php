<?php
require_once "./app/BangunDatar.php";

class PersegiPanjang extends BangunDatar
{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function buatBangunDatar($pola = '*')
    {
        echo PHP_EOL;
        for ($i = 0; $i < $this->lebar; $i++) {
            for ($j = 0; $j < $this->panjang; $j++) {
                echo $pola . ' ';
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
    }
}
