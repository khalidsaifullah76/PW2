<?php
 require_once "class_persegipanjang.php";

 $pp1 = new persegipanjang( 10,20 );
 $pp2 = new persegipanjang( 4,10 );
 echo "<br/>Luas persegipanjang I ".$pp1->cariluas();
 echo "<br>Luas persegipanjang II ".$pp2->cariluas();
 echo "<br>Keliling persegipanjang I ".$pp1->cariKeliling();
 echo "<br>Keliling persegipanjang II ".$pp2->cariKeliling();
 ?>
