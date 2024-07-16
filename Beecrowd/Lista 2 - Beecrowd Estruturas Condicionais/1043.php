<?php
    list ($a, $b, $c) = explode (' ', readline());
    
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b))
    {
        $p = $a + $b + $c;
        $p = number_format($p, 1, '.', '');
        echo "Perimetro = {$p}\n";
    } else 
    {
        $areaTr = (($a + $b) * $c) / 2;
        $areaTr = number_format($areaTr, 1, '.', '');
        echo "Area = {$areaTr}\n";
    }
?>