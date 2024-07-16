<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    $numEntradas = intval(readline());
    $linguas = [];
    for ($c = 0; $c < $numEntradas; $c++)
        array_push($linguas, readline());
    if (count(array_unique($linguas)) != 1)
        echo "ingles\n";
    else
        echo $linguas[0] . "\n";
}