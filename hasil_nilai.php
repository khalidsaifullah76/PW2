<?php

$nama =$_GET['nama'];
$matkul =$_GET['matkul'];
$uts =$_GET['uts'];
$uas =$_GET['uas'];
$nt =$_GET['nt'];


echo '<br/>Nama : '.$nama;
echo '<br/>Mata Kuliah : '.$matkul;
echo '<br/>Nilai UTS : '.$uts;
echo '<br/>Nilai UAS : '.$uas;
echo '<br/>Nilai Tugas : '.$nt;

$nilai = ($uts + $uas + $nt) / 3;
echo '<br/> Nilai Akhir : ' .$nilai;

if ($nilai >=85){
    $grade = 'A';
}
elseif ($nilai >=70){
    $grade = 'B';
}
elseif ($nilai >=56){
    $grade = 'C';
}
elseif ($nilai >=36){
    $grade = 'D';
}
else{
    $grade = 'D';
}
echo '<br/>Grade: '.$grade;

switch ($grade){
    case'A':
        $predikat = "Sangat Memuaskan";
        break;
    case'B':
        $predikat = "Memuaskan";
        break;
    case'c':
        $predikat = "Cukup";
        break;
    default:
    $predikat = "Tidak Ada";
}
echo '<br/>Predikat: '.$predikat


?>