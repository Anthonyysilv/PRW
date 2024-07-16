<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    list($A, $B) = explode(" ", readline());
    if (strlen($B) > strlen($A))
        echo "nao encaixa\n";
    else {
        if (substr($A, -strlen($B), strlen($B)) == $B)
            echo "encaixa\n";
        else
            echo "nao encaixa\n";
    }
}