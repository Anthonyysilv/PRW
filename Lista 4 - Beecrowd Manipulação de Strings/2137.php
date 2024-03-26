<?php
while ($N = intval(fgets(STDIN))) {
    $codigos = [];
    for ($i = 0; $i < $N; $i++)
        array_push($codigos, strval(readline()));
    sort($codigos);
    foreach ($codigos as $codigo) {
        echo "$codigo\n";
    }
}