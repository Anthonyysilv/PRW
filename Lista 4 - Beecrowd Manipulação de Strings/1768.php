<?php

// Função para desenhar uma árvore de Natal
function desenhar_arvore($n) {
    // Verifica se o tamanho é ímpar
    if ($n % 2 == 0) {
        $n++; // Incrementa para torná-lo ímpar
    }

    // Desenha a parte superior da árvore
    for ($i = 1; $i <= $n; $i += 2) {
        echo str_repeat(" ", ($n - $i) / 2); // Espaços à esquerda
        echo str_repeat("*", $i) . PHP_EOL; // Estrelas
    }

    // Desenha o tronco da árvore
    echo str_repeat(" ", ($n - 1) / 2); // Espaços à esquerda para alinhar o tronco
    echo "***" . PHP_EOL; // Tronco
    echo str_repeat(" ", ($n - 1) / 2); // Espaços à esquerda para alinhar o tronco
    echo "*". PHP_EOL; // Base do tronco

    // Linha em branco após cada árvore
    echo PHP_EOL;
}

// Processa cada caso de teste
while ($n = intval(fgets(STDIN))) {
    // Desenha a árvore para o tamanho dado
    desenhar_arvore($n);
}

?>