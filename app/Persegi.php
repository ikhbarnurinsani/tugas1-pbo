<?php
require_once "./app/BangunDatar.php";

class Persegi extends BangunDatar
{
    protected $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function buatBangunDatar($pola = '*')
    {
        echo PHP_EOL;
        for ($i = 0; $i < $this->sisi; $i++) {
            for ($j = 0; $j < $this->sisi; $j++) {
                echo $pola . ' ';
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
    }
}
