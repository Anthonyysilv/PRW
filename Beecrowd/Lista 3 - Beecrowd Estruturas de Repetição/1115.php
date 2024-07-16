<?php

while (true) {
    // Lê as coordenadas X e Y
    list($x, $y) = explode(" ", fgets(STDIN));

    // Verifica se pelo menos uma das coordenadas é nula
    if ($x == 0 || $y == 0) {
        break;
    }

    // Determina em qual quadrante o ponto se encontra
    if ($x > 0 && $y > 0) {
        echo "primeiro\n";
    } elseif ($x > 0 && $y < 0) {
        echo "quarto\n";
    } elseif ($x < 0 && $y < 0) {
        echo "terceiro\n";
    } elseif ($x < 0 && $y > 0) {
        echo "segundo\n";
    }
}

?>