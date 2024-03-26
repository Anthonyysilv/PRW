<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    $letras = str_split(readline());
    $combinações=1;
    foreach ($letras as $letra) {
        if (in_array(strtoupper($letra), ['A', 'E', 'I', 'O', 'S']))
            $combinações *= 3;
        else
            $combinações *= 2;
    }
    echo "$combinações\n";
}