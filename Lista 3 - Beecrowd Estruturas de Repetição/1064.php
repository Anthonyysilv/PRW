<?php
#aparece erro, mas não consegui identificar o que é necessário corrigir.
    $count = 0;
    for (i = 1; i <= 6; i++)
    {
        $num1 = (int)readline();
        $num2 = (int)readline();
        $num3 = (int)readline();
        $num4 = (int)readline();
        $num5 = (int)readline();
        $num6 = (int)readline();
        if ($num1 > 0)
        {
            $count++;
        } else if ($num2 > 0)
        {
            $count++;
        } else if ($num3 > 0)
        {
            $count++;
        } else if ($num4 > 0)
        {
            $count++;
        } else if ($num5 > 0)
        {
            $count++;
        } else if ($num6 > 0)
        {
            $count++;
        }
    }
    echo "{$count} valores positivos\n";
    $media = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6) / 6;
    echo "{$media}\n";
?>
