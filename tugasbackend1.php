<?php
// Tugas Pertemuan Pertama Backend
// Nama
$nama_depan = "Mohammad";
$nama_tengah = "Novrizal";
$nama_belakang = "Sugiarto";
$nama_lengkap = $nama_depan . " " . $nama_tengah . " " . $nama_belakang;

// No Telepon
$no_telp = "+6285155414564";

// Usia
$usia = 19;

// Tempat, Tanggal Lahir
$kota_lahir = "Jakarta";
$hari_lahir = "15";
$bulan_lahir = "Mei";
$tahun_lahir = 2002;
$tempat_tanggal_lahir = $kota_lahir . ", " . $hari_lahir . " " . $bulan_lahir . " " . $tahun_lahir;
$tahun_kabisat = $tahun_lahir % 4; // Tahun kabisat adalah tahun yang habis dibagi 4

// Status
$status_menikah = false;

// Alamat
$jalan = "Jl. Wijaya 1";
$kelurahan = "Petogogan";
$kecamatan = "Kebayoran Baru";
$kota = "Jakarta Selatan";
$kode_pos = "12170";
$alamat_lengkap = $jalan . ", " . $kelurahan . ", " . $kecamatan . ", " . $kota . ", " . $kode_pos;
// Target IPK
$target_ipk = "3.3";
?>

<!DOCTYPE html>
<html>
    <title>Tugas Biodata</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body>
        <h1>Biodata Saya</h1>
        <p>Nama Lengkap = <?php echo $nama_lengkap ?></p>
        <p>No. Telepon = <?php echo $no_telp ?></p>
        <p>Usia = <?php echo $usia ?> tahun</p>
        <p>Tempat Tanggal Lahir = <?php echo $tempat_tanggal_lahir?>
        <?php echo var_dump($tahun_kabisat == 0)?></p>
        <p>Status Menikah = <?php var_dump($status_menikah)?></p>
        <p>Alamat = <?php echo $alamat_lengkap?></p>
        <p>Target IPK = <?php echo $target_ipk?></p>
    </body>
</html>