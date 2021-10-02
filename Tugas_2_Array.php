<?php
// 1. Buatlah Array
echo "1. Buatlah Array kemudian cetak" . "<br>";
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
"Oktober", "November", "Desember"];
var_export($hari);
echo "<br>";
var_export($bulan);
echo "<br>";
echo "-------------------------------------";
echo "<br>";

// 2. Hitung berapa banyak elemen Array
echo "2. Hitung berapa banyak elemen Array bulan" . "<br>";
$jumlah = count($bulan);
echo "Jumlah elemen array bulan: " . $jumlah;
echo "<br>";
echo "-------------------------------------";
echo "<br>";

// 3. Kalikan variable jumlah dengan umur
echo "3. Kalikan variable jumlah dengan umur" . "<br>";
$umur = 19; // Umur saya 19 tahun
$hasil = $jumlah * $umur;
echo $jumlah . " * " . $umur . " = " . $hasil;
echo "<br>";

if ($hasil %2 == 0){
    echo $hasil . " merupakan angka genap";
} else {
    echo $hasil . " merupakan angka ganjil";
}

?>