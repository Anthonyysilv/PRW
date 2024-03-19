<?php
    // Função para construir e imprimir a sequência espelho
    function sequencia_espelho($inicio, $fim) {
        // Constrói a sequência crescente
        $sequencia = "";
        for ($i = $inicio; $i <= $fim; $i++) {
            $sequencia .= $i;
        }
        
        // Inverte a sequência e imprime a sequência espelho
        echo $sequencia . strrev($sequencia) . PHP_EOL;
    }
    
    // Número de casos de teste
    $casos = intval(fgets(STDIN));
    
    // Processa cada caso de teste
    for ($i = 0; $i < $casos; $i++) {
        // Lê os valores de início e fim da sequência
        list($inicio, $fim) = array_map('intval', explode(" ", fgets(STDIN)));
        // Chama a função para imprimir a sequência espelho
        sequencia_espelho($inicio, $fim);
    }
?>