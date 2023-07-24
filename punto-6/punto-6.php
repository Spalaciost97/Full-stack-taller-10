<?php
//Variables
$Name="";
$Age=0;
//________
echo "Por favor ingrese su nombre: \n";
fscanf(STDIN,"%s",$Name);
echo "Por favor ingrese su edad: \n";
fscanf(STDIN,"%d",$Age);
if ($Age >= 18) {
  echo "Felicitaciones ". $Name . ", eres mayor de edad, puedes continuar.";
}
else{
    echo "Lo siento ". $Name . ", eres menor  de edad, no puedes continuar.";
}
?>