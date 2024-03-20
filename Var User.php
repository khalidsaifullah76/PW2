<?php

 $nama = 'khalid saifullah';
 $umur = 20;
 $berat = 47.4;

 echo 'Nama : ' . $nama;
 echo '<br/>Umur : ' . $umur.' Tahun';
 echo '<br/>Berat : '.$berat.' Kg';

 echo "<br/>Hello $nama Apakabar";

 echo '<hr>';
 echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
 echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

 echo '<hr>';
 define ('PELAJARAN','PW2');
 ECHO PELAJARAN;
?> 