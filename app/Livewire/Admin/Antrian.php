<?php

class Antrian {
    private $counterArray = [];

    public function __construct($iterable = null) {
        if ($iterable) {
            $this->update($iterable);
        }
    }

    public function update($iterable) {
        foreach ($iterable as $item) {
            $this->counterArray[$item] = isset($this->counterArray[$item]) ? $this->counterArray[$item] + 1 : 1;
        }
    }

    public function mostCommon($n = null) {
        arsort($this->counterArray);
        $mostCommon = array_slice($this->counterArray, 0, $n);
        return $mostCommon;
    }
}

// Contoh penggunaan
$deret_angka = [1, 2, 3, 4, 2, 2, 3, 4, 5, 5, 5];

$counter = new Antrian($deret_angka);

// Mendapatkan nilai yang paling sering muncul
$mostCommon = $counter->mostCommon(1);

if (!empty($mostCommon)) {
    $nilaiTerbanyak = key($mostCommon);
    $frekuensiTerbanyak = current($mostCommon);
    echo "Nilai yang paling sering muncul adalah: $nilaiTerbanyak dengan frekuensi: $frekuensiTerbanyak";
} else {
    echo "Tidak ada nilai yang muncul.";
}
