<?php
    $ve = floatval(readline());
    $km = floatval(readline());
    $co = floatval(readline());
    
    $ho = number_format($km/$ve, 2, ".", " ");
    $comb = number_format($km/$co, 2, ".", " ");
    
    echo "Total horas: $ho\n";
    echo "Total combustivel: $comb\n";
?>