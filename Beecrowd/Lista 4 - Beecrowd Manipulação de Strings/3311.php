<?php
$N = intval(readline());
$nomes = ['a' => [], 'b' => [], 'c' => [], 'd' => [], 'e' => [], 'f' => [], 'g' => [], 'h' => [], 'i' => [], 'j' => [], 'k' => [], 'l' => [], 'm' => [], 'n' => [], 'o' => [], 'p' => [], 'q' => [], 'r' => [], 's' => [], 't' => [], 'u' => [], 'v' => [], 'w' => [], 'x' => [], 'y' => [], 'z' => []];
for ($i = 0; $i < $N; $i++) {
    $entrada = readline();
    array_push($nomes[strtolower(substr($entrada, 0, 1))], $entrada);
}
foreach ($nomes as $inicial)
    if (!empty($inicial))
        foreach ($inicial as $nome)
            echo "$nome\n";