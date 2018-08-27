<?php

for ($i=1; $i<=100; $i++) { //smua angka yg akan di ceck
    $a =0;

    for ($j=1; $j<=$i; $j++){  // semua kemungkinan faktor pembagi

        //jika angka yg akan dicek habis dibagi faktor pembagi, a nya +1
        if ($i % $j == 0 ) {
            $a++;
        }
    }
    if($a == 2) {
        echo $i. "<br>";
    } 
}
?>