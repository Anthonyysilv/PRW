<?php
$C = intval(fgets(STDIN));
while ($C--) {
    $palavra = trim(fgets(STDIN));
    $tamanho = strlen($palavra);
    $resposta = '';
    $i = $tamanho - 1;
    while ($tamanho--) {
        if (ctype_lower($palavra[$i])) {
            $resposta .= $palavra[$i--];
        } else {
            $i--;
        }
    }
    echo $resposta . "\n";
}