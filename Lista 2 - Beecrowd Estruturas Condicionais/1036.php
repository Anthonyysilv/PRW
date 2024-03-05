<?php
    list($a, $b, $c) = explode(" ", readline());
    $a = (double) $a;
    $b = (double) $b;
    $c = (double) $c;
    $d = ($b * $b) - (4 * $a * $c);
    if (($d > 0) and ($a > 0)){
        $r1 = (- $b + sqrt($d)) / (2 * $a);
        $r2 = (- $b - sqrt($d)) / (2 * $a);
        $r1 = number_format($r1, 5, ".", "");
        $r2 = number_format($r2, 5, ".", "");
        echo "R1 = {$r1}\n";
        echo "R2 = {$r2}\n";
    }
    else{
        echo "Impossivel calcular\n";
    }
?>