<?php
class Mobil
{
    // Atribut mobil
    public $merk;
    public $warna;
    public $kecepatan;

    // Konstruktor untuk menginisialisasi nilai atribut saat objek dibuat
    public function __construct($merk, $warna, $kecepatan)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    // Metode untuk melaju
    public function melaju()
    {
        echo "Mobil dengan merk $this->merk berwarna $this->warna sedang melaju dengan kecepatan $this->kecepatan km/jam.<br>";
    }

    // Metode untuk berhenti
    public function berhenti()
    {
        echo "Mobil $this->merk telah berhenti.<br>";
        $this->kecepatan = 0; // Mengatur kecepatan menjadi 0 saat berhenti
    }

    // Metode untuk menambah kecepatan
    public function tambahKecepatan($tambah)
    {
        $this->kecepatan += $tambah;
        echo "Kecepatan mobil $this->merk ditambah $tambah km/jam. Sekarang kecepatannya adalah $this->kecepatan km/jam.<br>";
    }

    // Metode untuk melambat
    public function melambat($kurang)
    {
        $this->kecepatan -= $kurang;
        if ($this->kecepatan < 0) {
            $this->kecepatan = 0; // Mengatur kecepatan agar tidak negatif
        }
        echo "Kecepatan mobil $this->merk berkurang $kurang km/jam. Sekarang kecepatannya adalah $this->kecepatan km/jam.<br>";
    }
}

// Membuat objek mobil dan mengisi atributnya
$mobil1 = new Mobil("Toyota", "Merah", 60);

// Memanggil metode-metode yang terdapat pada kelas Mobil
$mobil1->melaju();
$mobil1->tambahKecepatan(20);
$mobil1->melambat(30);
$mobil1->berhenti();
