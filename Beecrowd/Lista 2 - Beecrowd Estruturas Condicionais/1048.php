<?php

    $salario = (float)readline();
    $novo_salario = 0;
    $x = 0;
    if ($salario >= 0 && $salario <= 400.00){
        $x = 15;
        $novo_salario = $salario + ($salario * ($x/100));
    }
    elseif ($salario >= 400.01 && $salario <= 800.00){
        $x = 12;
        $novo_salario = $salario + ($salario * ($x/100));
    }
    elseif ($salario >= 800.01 && $salario <= 1200.00){
        $x = 10;
        $novo_salario = $salario + ($salario * ($x/100));
    }
    elseif ($salario >= 1200.01 && $salario <= 2000.00){
        $x = 7;
        $novo_salario = $salario + ($salario * ($x/100));
    }
    else{
        $x = 4;
        $novo_salario = $salario + ($salario * ($x/100));
    }

    $novo_salario = number_format($novo_salario, 2, '.', "");
    $dinheiro_ganho = $novo_salario - $salario;
    $dinheiro_ganho = number_format($dinheiro_ganho, 2, '.', "");
    echo "Novo salario: {$novo_salario}\n";
    echo "Reajuste ganho: {$dinheiro_ganho}\n";
    echo "Em percentual: {$x} %\n";

?>