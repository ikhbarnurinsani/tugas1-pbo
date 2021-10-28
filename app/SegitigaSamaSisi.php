<?php
require_once "./app/Persegi.php";

class SegitigaSamaSisi extends Persegi
{
    public function buatBangunDatar($pola = '*')
    {
        echo PHP_EOL;
        for ($i = 1; $i <= $this->sisi; $i++) {
            for ($j = $i; $j < $this->sisi; $j++) {
                echo " ";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo $pola . ' ';
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
    }
}
