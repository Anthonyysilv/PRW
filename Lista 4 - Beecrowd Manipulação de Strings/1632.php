<?php

// Função para gerar todas as variações possíveis da senha
function gerar_variacoes($senha) {
    $variacoes = [];
    $n = strlen($senha);
    
    // Inicialmente, adicionamos a senha original
    $variacoes[] = $senha;

    // Geramos variações substituindo os caracteres
    for ($i = 0; $i < $n; $i++) {
        $c = $senha[$i];
        $substitutos = [$c];

        // Se o caractere for uma das letras específicas, adicionamos suas variações
        if (ctype_alpha($c) && in_array(strtoupper($c), ['A', 'E', 'I', 'O', 'S'])) {
            $substitutos[] = strtoupper($c);
            if ($c == 'A') $substitutos[] = '4';
            if ($c == 'E') $substitutos[] = '3';
            if ($c == 'I') $substitutos[] = '1';
            if ($c == 'O') $substitutos[] = '0';
            if ($c == 'S') $substitutos[] = '5';
        }

        // Geramos todas as variações substituindo o caractere
        foreach ($substitutos as $substituto) {
            $nova_senha = substr_replace($senha, $substituto, $i, 1);
            $variacoes[] = $nova_senha;
        }
    }

    return $variacoes;
}

// Função para contar o número de variações possíveis
function contar_variacoes($senha) {
    return count(gerar_variacoes($senha));
}

// Número de casos de teste
$T = intval(fgets(STDIN));

// Processa cada caso de teste
for ($i = 0; $i < $T; $i++) {
    // Lê a senha
    $senha = trim(fgets(STDIN));
    // Calcula e imprime o número de variações possíveis
    echo contar_variacoes($senha) . PHP_EOL;
}

?>