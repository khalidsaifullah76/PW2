<?php
// looping dengan for 
// pengulangn angka dari 1 - 10 

for ($x=1; $x<=10; $x++){
    echo '<br/>'.$x;
}

for ($y=10; $y>=1; $y=$y-1){
    echo '<br/>'.$y;
}
?>

<form> 
    jumlah masa aksi 

<?php
for ($masa=1; $masa<=100; $masa=$masa+1){
    echo "<input type='radio' name='jlm_masa' value='masa'>".$masa;
}