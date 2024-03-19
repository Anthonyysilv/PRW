<?php

// Lê o valor inteiro N
$N = intval(fgets(STDIN));

// Loop de 1 a 10000 para encontrar os números que, quando divididos por N, dão resto igual a 2
for ($i = 1; $i <= 10000; $i++) {
    if ($i % $N == 2) {
        echo $i . "\n";
    }
}

?>