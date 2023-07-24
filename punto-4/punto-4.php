<?php
//Variables
$FirstName="";
$LastName="";
//
echo "Ingrese su nombre: \n";
fscanf(STDIN, "%s", $FirstName);
echo "Ingrese su apellido: \n";
fscanf(STDIN, "%s", $LastName);
echo "El nombre ingresado es: "."\n". $FirstName ." ". $LastName;
?>