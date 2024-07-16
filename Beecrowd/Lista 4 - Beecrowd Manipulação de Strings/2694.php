<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    $entrada = str_split(readline());
    $num1 = intval(implode(array_slice($entrada, 2, 3)));
    $num2 = intval(implode(array_slice($entrada, 5, 3)));
    if (is_int(intval($entrada[11])))
        $num3 = array_slice($entrada, 11, 3);
    else
        $num3 = array_slice($entrada, 12, 2);
    if (intval($num3[0]) == NAN)
        array_shift($num3);
    $num3 = intval(implode($num3));
    echo ($num1 + $num2 + $num3) . "\n";
}