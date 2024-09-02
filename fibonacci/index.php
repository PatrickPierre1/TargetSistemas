<?php
function fibonacci($num) {
    $a = 0;
    $b = 1;

    if ($num == $a || $num == $b) return true;

    while ($b < $num) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    return $b == $num;
}

$num = 21; // Coloque aqui o número a ser verificado

if (fibonacci($num)) {
    echo "$num pertence à sequência de Fibonacci.";
} else {
    echo "$num não pertence à sequência de Fibonacci.";
}
// O Número e o resultado serão exibidos no navegador