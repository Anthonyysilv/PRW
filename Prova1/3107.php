<?php
    $velocidadeM = trim(floatval(fgets(STDIN)));
    $distancia = trim(floatval(fgets(STDIN)));
    $consumoM = trim(floatval(fgets(STDIN)));
    
    $totalHoras = $distancia/$velocidadeM;
    $totalComb =  $distancia/$consumoM;
    
    echo "Total horas: ". number_format($totalHoras, 2, ".", "").PHP_EOL;
    echo "Total combustivel: ".number_format($totalComb, 2, ".","").PHP_EOL;
?>