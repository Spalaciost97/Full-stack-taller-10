<?php
//Variables
$Array=[];
$suma=0;
//________
for($i=0;$i<5;$i++){
    echo "Ingresa el número de la posicion [". $i+1 . "] \n" ;
    fscanf(STDIN,"%d",$Array[$i]);
}
echo "El arreglo es [ ";
for($i=0;$i<5;$i++){
    echo $Array[$i]." ";
    $suma=$suma+$Array[$i];
}

echo "] \nLa suma de los numeros del arreglo es: ". $suma;
?>