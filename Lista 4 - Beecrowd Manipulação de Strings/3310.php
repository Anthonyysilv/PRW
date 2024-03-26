<?php
$N = intval(readline());
$entradaTeto = explode(" ", readline());
$entradaChao = explode(" ", readline());
$mudancas = ['-1' => $entradaChao, '1' => $entradaTeto];
$mudancaTeto = 0;
$mudancaChao = 0;
$local = 1;
for ($i = 0; $i < $N; $i++) {
    if ($mudancas[$local][$i] == 0) {
        $mudancaTeto++;
        $local *= -1;
    } elseif ($i != 0) {
        if ($mudancas[$local][$i] > $mudancas[$local][$i - 1]) {
            $mudancaTeto++;
            $local *= -1;
        }
    }
}
$local = -1;
for ($i = 0; $i < $N; $i++) {
    if ($mudancas[$local][$i] == 0) {
        $mudancaChao++;
        $local *= -1;
    } elseif ($i != 0) {
        if ($mudancas[$local][$i] > $mudancas[$local][$i - 1]) {
            $mudancaChao++;
            $local *= -1;
        }
    }
}
if ($mudancaChao > $mudancaTeto)
    echo "$mudancaTeto\n";
else
    echo "$mudancaChao\n";