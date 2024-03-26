<?php
while ($entrada = fgets(STDIN)) {
    list($numeroPalavrasConto, $numeroLinha, $caracteresLinha) = explode(" ", $entrada);
    $paginas = $linhas = 1;
    $conto = readline();
    $numeroPalavrasConto--;
    $conto = explode(" ", $conto);
    $letras = 0;
    for ($i = 0; $i < $numeroPalavrasConto; $i++) {
        $x = strlen($conto[$i]);
        if (($letras + $x + 1) <= $caracteresLinha)
            $letras += $x + 1;
        else {
            ++$linhas;
            if ($linhas > $numeroLinha) {
                ++$paginas;
                $linhas = 1;
                $letras = 0;
            }
        }
    }
    echo "$paginas\n";
}