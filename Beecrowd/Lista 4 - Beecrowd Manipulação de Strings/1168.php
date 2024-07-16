<?php
function calcularLEDS($numero) {
    $ledsPorDigito = array(
        0 => 6,
        1 => 2,
        2 => 5,
        3 => 5,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 3,
        8 => 7,
        9 => 6
    );
    $totalLEDS = 0;
    for ($i = 0; $i < strlen($numero); $i++) {
        $digito = intval($numero[$i]);
        $totalLEDS += $ledsPorDigito[$digito];
    }
    return $totalLEDS;
}
function calcularLEDSParaNumeros() {
    $numCasosTeste = intval(fgets(STDIN));
    for ($i = 0; $i < $numCasosTeste; $i++) {
        $numero = trim(fgets(STDIN));
        $numLEDS = calcularLEDS($numero);
        echo $numLEDS . " leds\n";
    }
}
calcularLEDSParaNumeros();
?>