<?php

$ar_skill = ["html"=> 10, "css"=> 10, "javascript"=> 20, "rwd bootstrap"=> 20, "python"=> 30, "php"=> 30, "java"=> 50];

// memanggil inputan user
$nim = $_POST['NIM'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$skill = $_POST['skill'];

// function untuk menetukan skor dan kategori
function skor_skill($skill) {
    global $ar_skill;
    $skorTotal = 0;
    foreach ($skill as $key) {
        if (isset($ar_skill[$key])) {
            $skorTotal += $ar_skill[$key];
        }
    }
    return $skorTotal;
}
function kategori_skill($angka){
    if ($angka == 0){
        return 'Tidak Memadai';
    }
    elseif ($angka < 40){
        return 'Kurang';
    }
    elseif ($angka < 60){
        return 'Cukup';
    }
    elseif ($angka < 100){
        return 'Baik';
    }
    else{
        return 'Mahir';
    }
}

// menentukan skor dan kategori
$skor_total = skor_skill($skill);
$kategori = kategori_skill($skor_total);

//CETAK
echo "<h2>Hasil Registrasi:</h2>";
echo "Nim: $nim <br>";
echo "Nama: $nama <br>";
echo "Jenis kelamin: $jk <br>";
echo "Program Studi: $prodi <br>";
echo "Skill: ";
foreach ($skill as $value) {
    echo "$value, ";
}
echo "<br>Skor : $skor_total";   
echo "<br> Kategori : $kategori";
echo "<br> Domisili : $domisili";
echo "<br>Email: $email <br>";
