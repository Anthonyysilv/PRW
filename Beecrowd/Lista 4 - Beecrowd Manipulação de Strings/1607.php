<?php

// Função para calcular o mínimo número de operações
function min_operacoes($a, $b) {
    $n = strlen($a);
    $ops = 0;
    for ($i = 0; $i < $n; $i++) {
        // Calcula a diferença entre os códigos ASCII das letras
        $diff = ord($b[$i]) - ord($a[$i]);
        // Se a diferença for negativa, ajusta para contemplar a rotação no alfabeto
        if ($diff < 0) {
            $diff += 26;
        }
        $ops += $diff;
    }
    return $ops;
}

// Lê o número de casos de teste
$T = intval(fgets(STDIN));

// Processa cada caso de teste
for ($i = 0; $i < $T; $i++) {
    // Lê as duas strings
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    // Calcula e imprime o mínimo número de operações
    echo min_operacoes($a, $b) . PHP_EOL;
}
?>