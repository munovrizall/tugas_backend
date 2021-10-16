<?php

function perhitunganSederhana(int $parameter1, int $parameter2){
    // Masukkan perhitungan $angkatan x $semester
    $sum = 0;
    $sum = $parameter1 * $parameter2;
    
    // Buat if else dari perhitungan diatas
    if($sum % 3 == 0){
        $hasil = "Habis dibagi tiga";
        return $hasil;
    } else {
        $hasil = "Tidak habis dibagi tiga";
        return $hasil;
    }
    
}

global $angkatan;
$angkatan = 2021;
global $semester;
$semester = 1;

echo perhitunganSederhana($angkatan, $semester);

?>