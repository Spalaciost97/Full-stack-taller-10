<?php
echo "Este programa entrega los números pares del 1 al 100: \n";
$suma = 0;
for($i = 1; $i<=100; $i++){
    if($i % 2 == 0){
        echo $i . "\n";
        $suma = $suma + $i;
    }
}
echo "La suma de los numeros es: " . $suma;
?>