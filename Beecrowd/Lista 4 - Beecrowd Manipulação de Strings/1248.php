<?php
$N = intval(readline());
while ($N--) {
    $alimentosDieta = str_split(readline());
    $cafeManha = str_split(readline());
    $almoco = str_split(readline());
    $total = array_merge($cafeManha, $almoco);
    $falta = array_diff($alimentosDieta, $total);
    sort($falta);
    if (count(array_merge($total, $falta)) == count($alimentosDieta))
        echo implode($falta) . "\n";
    else
        echo "CHEATER\n";
}