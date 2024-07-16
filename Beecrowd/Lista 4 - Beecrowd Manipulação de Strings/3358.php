<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    $entrada = readline();
    if (preg_match('/[bcdfghjklmnpqrstvwxyz]{3}/i', $entrada))
        echo "$entrada nao eh facil\n";
    else
        echo "$entrada eh facil\n";
}