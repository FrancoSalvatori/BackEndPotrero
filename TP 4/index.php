<?php

$n = 5;

if ($n > 0) {
    echo "El número ingresado es un número positivo." . "<br>";
}

if ($n > 1 && $n < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10." . "<br>";
}

if ($n >= 10 || $n < 2) {
    echo "El número ingresado es mayor o igual a 10, o menor a 2." . "<br>";
} else {
    echo "El número ingresado no pudo ser validado" . "<br>";
}

$numero1 = 10;
$numero2 = 5;

if ($numero1 > $numero2) {
    echo "La suma es: " . ($numero1 + $numero2) . "<br>" . 
        "La resta es: " . ($numero1 - $numero2) . "<br>";
} elseif ($numero2 > $numero1) {
    echo "La multiplicación es: ". ($numero2 * $numero1) . "<br>" . 
        "La división entera es: " . ($numero2 / $numero1) . "<br>" . 
        "El resto es: " . ($numero2 % $numero1) . "<br>";
} else {
    echo "Los números ingresados son iguales.";
}
?>