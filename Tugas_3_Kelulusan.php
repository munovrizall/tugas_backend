<?php
// Mendapatkan Nilai Ujian
$nilai_ujian = [70, 80, 60, 0, 85, 95, 85, 40, 50, 76, 87, 45, 63, 90, 76];
echo "Nilai Ujian :";
echo "<br>";

for($i = 0; $i < count($nilai_ujian); $i++){
    echo $i + 1 . ". ";
    echo $nilai_ujian[$i];
    if ($nilai_ujian[$i] >= 90 and $nilai_ujian[$i] <= 100){
        echo " A (Lulus)";
    } else if ($nilai_ujian[$i] >= 80 and $nilai_ujian[$i] <= 89){
        echo " B (Lulus)";
    } else if ($nilai_ujian[$i] >= 70 and $nilai_ujian[$i] <= 79){
        echo " C (Lulus)";
    } else if ($nilai_ujian[$i] >= 60 and $nilai_ujian[$i] <= 69){
        echo " D (Tidak Lulus)";
    } else {
        echo " E (Tidak Lulus)";
    }
    echo "<br>";
}

// Mendapatkan Nilai Rata-rata
echo "<br>";

function rataRata($nilai, $rata){
    $rata = 0;
    for ($i = 0; $i < count($nilai); $i++){
        $rata += $nilai[$i];
    }
    $rata /= count($nilai); 
    return $rata;
}

$rata_rata = 0;
echo "Nilai Rata-rata = " . rataRata($nilai_ujian, $rata_rata);
echo "<br>";

// Mendapatkan Nilai Akhir
$nilai_akhir = rataRata($nilai_ujian, $rata_rata) / 25;
echo "Nilai Akhir = " . $nilai_akhir;
?>