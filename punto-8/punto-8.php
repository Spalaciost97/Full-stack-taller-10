<?php
//Variables
const TICKETPRICE=25000;
$Selection=0;
$Tickets=0;
//___________
echo "Seleccione el tipo de afiliación: 
1) Afiliación tipo A
2) Afiliación tipo B
3) Afiliación tipo C
4) Afiliación tipo D
5) No afiliado \n";
fscanf(STDIN,"%d",$Selection);
echo "Por favor ingrese el número de boletas que desea comprar: ";
fscanf(STDIN,"%f",$Tickets);
switch ($Selection) {
    case 1:
        $price=0.7*TICKETPRICE*$Tickets;
        echo "El precio de las boletas es: $" . $price;
        break;
    case 2:
        $price=0.75*TICKETPRICE*$Tickets;
        echo "El precio de las boletas es: $" . $price;
        break;
    case 3:
        $price=0.9*TICKETPRICE*$Tickets;
        echo "El precio de las boletas es: $" . $price;
        break;
    case 4:
        $price=0.95*TICKETPRICE*$Tickets;
        echo "El precio de las boletas es: $" . $price;
        break;
    case 5:
        $price=TICKETPRICE*$Tickets;
        echo "El precio de las boletas es: $" . $price;
        break;
}
?>