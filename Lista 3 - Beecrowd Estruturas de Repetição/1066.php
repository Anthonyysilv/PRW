<?php
    $par = 0;
    $impar = 0;
    $pos = 0;
    $neg = 0;
    for ($i = 1; $i <= 5; $i++)
    {
        $num = (int)readline();
        if ($num % 2 == 0)
        {
            $par++;
        }
        else if ($num % 2 != 0)
        {
            $impar++;
        }
        else if ($num > 0)
        {
            $pos++;
        }
        else
        {
            $neg++;
        }
    }
    echo "{$par} valor(es) par(es)\n";
    echo "{$impar} valor(es) impar(es)\n";
    echo "{$pos} valor(es) positivo(s)\n";
    echo "{$neg} valor(es) negativo(s)\n";
?>