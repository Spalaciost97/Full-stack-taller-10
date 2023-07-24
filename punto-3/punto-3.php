<?php
//Declaración de variables
$FirstNumber=0;
$SecondNumber=0;
//CALCULO
echo "Ingrese el primer numero a sumar: \n";
fscanf(STDIN, "%f", $FirstNumber);
echo "Segundo numero a sumar: \n";
fscanf(STDIN, "%f", $SecondNumber);
$Suma=$FirstNumber + $SecondNumber;
echo "La suma de los numeros es: " . $Suma;
?>