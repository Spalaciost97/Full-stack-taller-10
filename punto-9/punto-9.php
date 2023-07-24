<?php
//Variables
$Number=0;
$i=0;
//_________
echo "Este programa entrega la tabla de multiplicar de un número desde 0 hasta el 30 
por favor ingresa un número: \n";
fscanf(STDIN,"%d",$Number);

echo "La tabla del número ". $Number . " es: \n";

while ($i <= 30) {
    $mult=$Number*$i;
    echo $Number . " X " . $i . " = " . $mult. "\n"; 
    $i++;
}
?>