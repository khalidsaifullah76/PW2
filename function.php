<?php
// function define by user 

// fungsi yang tidak mengembalikan nilai
function salam(){
    echo "assalamualaikum, apa kabar";
}
salam();
'<br>'
// function panggil ($arg){
//     echo"apa kabar mas $arg";
// }
// panggil("angga");
// fungsi yang mengembalikan nilai
// function hasil ($a,$b){
//     $c=$a*$b;
//     return $c;
// }
// echo hasil(5,2);
function umur ($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo umur(2003)<br/>;
?>