<?php
class Waktu
{
    public $jam;
    public $menit;
    public $detik;
    // deklarasikan atribut sesuai ditentukan buku

    // deklarasikan metode sesuai yang diminta buku
    public function __construct($jam, $menit, $detik)
    {
        $this->jam = $jam; {
            $this->menit = $menit; {
                $this->detik = $detik; {
                }
            }
        }
    }
}

$contoh = new Waktu(15, 34, 50);
echo "Sekarang pukul" . $contoh->jam . ":" . $contoh->menit . ":" . $contoh->detik . "<br>"; //output: Sekarang pukul 15:34:50