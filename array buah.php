<?php
// array ada 2 array numerik dan array asosiatif
// syarat pengunaan array dengan sintaks foreach

// 1 array numerik
$array_buah = ['pepaya', 'mangga', 'pisang', 'jeruk'];
echo $array_buah[1];
echo '<br>';
echo count ($array_buah);
echo '<br>';
foreach ($array_buah as $value){
        echo $value.'<br>';
}
// 2 array asosiatif
echo '<hr>';
foreach ( $array_buah as $index => $value){
    echo "$index $value <br>";
}
echo '<hr>';
$ar_sisga = array(10=>'luluk', 20=>'angga', 30=>'adi', 'afif');
foreach  ($ar_sisga as $index => $value){
    echo "$index $value <br>";
}
?>