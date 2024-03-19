<?php

// Inicializa variáveis para armazenar o maior valor e sua posição
$maiorValor = PHP_INT_MIN;
$posicaoMaiorValor = 0;

// Loop para ler os 100 valores inteiros
for ($i = 1; $i <= 100; $i++) {
    // Lê o valor inteiro
    $valor = intval(fgets(STDIN));

    // Verifica se o valor é maior que o maior valor atual
    if ($valor > $maiorValor) {
        $maiorValor = $valor;
        $posicaoMaiorValor = $i;
    }
}

// Imprime o maior valor e sua posição
echo "$maiorValor\n$posicaoMaiorValor\n";

?>