<?php
$N = intval(readline());
while ($N--) {
    $numero = str_split(readline());
    if (($numero[0] == 'o' && $numero[1] == 'n') || ($numero[0] == 'o' && $numero[2] == 'e') || ($numero[1] == 'n' && $numero[2] == 'e'))
        echo "1\n";
    elseif (($numero[0] == 't' && $numero[1] == 'w') || ($numero[0] == 't' && $numero[2] == 'o') || ($numero[1] == 'w' && $numero[2] == 'o'))
        echo "2\n";
    else
        echo "3\n";
}