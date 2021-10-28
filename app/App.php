<?php
require_once "./app/Persegi.php";
require_once "./app/PersegiPanjang.php";
require_once "./app/SegitigaSamaSisi.php";

class App
{
    private $persegi;
    private $persegiPanjang;
    private $segitiga;

    public function run($argv, $argc)
    {
        $perintah1 = isset($argv[1]) ? $argv[1] : '';
        $perintah2 = isset($argv[2]) ? $argv[2] : '';
        switch ($perintah1) {
            case 'buat':
                switch ($perintah2) {
                    case 'persegi':
                        $this->persegi = new Persegi(isset($argv[3]) ? $argv[3] : 4);
                        $this->persegi->buatBangunDatar(isset($argv[4]) ? $argv[4] : '*');
                        break;
                    case 'persegi-panjang':
                        $this->persegiPanjang = new PersegiPanjang(
                            isset($argv[3]) ? $argv[3] : 4,
                            isset($argv[4]) ? $argv[4] : 8
                        );
                        $this->persegiPanjang->buatBangunDatar(isset($argv[5]) ? $argv[5] : '*');
                        break;
                    case 'persegi-panjang':
                        $this->persegiPanjang = new PersegiPanjang(
                            isset($argv[3]) ? $argv[3] : 4,
                            isset($argv[4]) ? $argv[4] : 8
                        );
                        $this->persegiPanjang->buatBangunDatar(isset($argv[5]) ? $argv[5] : '*');
                        break;
                    case 'segitiga':
                        $this->segitiga = new SegitigaSamaSisi(isset($argv[3]) ? $argv[3] : 5,);
                        $this->segitiga->buatBangunDatar(isset($argv[4]) ? $argv[4] : '*');
                        break;
                    default:
                        echo PHP_EOL;
                        echo "cara penggunaan: " . PHP_EOL;
                        echo "  php index.php buat [bangun datar] [opsional]" . PHP_EOL . PHP_EOL;
                        echo "bangun datar: " . PHP_EOL;
                        echo "  persegi \t\tMembuat pola persegi" . PHP_EOL;
                        echo "  persegi panjang \tMembuat pola persegi panjang" . PHP_EOL;
                        echo "  segitiga \t\tMembuat pola segitiga" . PHP_EOL . PHP_EOL;
                        echo "opsional: " . PHP_EOL;
                        echo "  persegi [sisi] [pola]" . PHP_EOL;
                        echo "  persegi panjang [panjang] [lebar] [pola]" . PHP_EOL;
                        echo "  segitiga [sisi] [pola]" . PHP_EOL . PHP_EOL;
                        break;
                }
                break;
            default:
                echo PHP_EOL;
                echo "cara penggunaan: " . PHP_EOL;
                echo "  php index.php [menu] " . PHP_EOL . PHP_EOL;
                echo "menu: " . PHP_EOL;
                echo "  buat \tMembuat pola bangun datar" . PHP_EOL . PHP_EOL;
                break;
        }
    }
}
