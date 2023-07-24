<?php
//Funciones
function ValidarContrasena($contrasena) {
    $LongitudMin = 8;
    $Mayuscula = preg_match('/[A-Z]/', $contrasena);
    $Numero = preg_match('/\d/', $contrasena);

    if (strlen($contrasena) >= $LongitudMin && $Mayuscula && $Numero) {
        echo "La contraseña es segura.";
    } else {
        echo "La contraseña no es segura. Asegúrate de que cumple con las siguientes condiciones:\n";
        echo "- Tiene 8 o más caracteres.\n";
        echo "- Tiene al menos una letra mayúscula.\n";
        echo "- Tiene al menos un número.";
    }
}
//_____________
$Password = '';
echo "Por favor ingresa tu contraseña: \n";
fscanf (STDIN, "%s", $Password);
ValidarContrasena($Password);
?>