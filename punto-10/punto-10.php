<?php
//Variables
$i=0;
//__________
echo "Este programa entrega los números pares del 1 al 100: \n";

while ($i <= 100) {
    if ($i % 2 == 0){
        echo $i . "\n";
    }
    $i++;
}
?>