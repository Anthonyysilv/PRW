<?php

    $salario = (float)readline();
    if ($salario >= 0 && $salario <= 2000.00){
        echo "Isento\n";
    }
    else{
        $taxa = 0;
        if ($salario >= 2000.01 && $salario <= 3000.00){
            $taxa = ($salario - 2000) * (8 /100);
        }
        elseif ($salario >= 3000.01 && $salario <= 4500.00){
            $taxa = (1000 * (8 /100)) + (($salario - 3000) * (18 /100));
        }
        else{
            $taxa = (1000 * (8 /100)) + (1500 * (18 /100)) + (($salario - 4500) * (28 /100));
        }
        $taxa = number_format($taxa, 2, ".", "");
        echo "R$ {$taxa}\n";
    }

?>