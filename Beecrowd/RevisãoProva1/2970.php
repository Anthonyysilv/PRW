<?php
    while (true)
    {
        $k = intval(readline());
        if ($k == 0) //Só tem uma condição então não precisa de chaves
            break;
        $div = array_map('intval', explode(" ", readline()));
        for ($i = 0; $i < $k; $i++)
        {
            $con = array_map('intval', explode(" ", readline()));
            if ($con[0]==$div[0] || $con[1]==$div[1])
            {
                echo "divisa\n";
            } else if ($con[0]<$div[0] & $con[1]>$div[1])
            {
                echo "NO\n";
            } else if ($con[0]>$div[0] & $con[1]>$div[1])
            {
                echo "NE\n";
            } else if ($con[0]>$div[0] & $con[1]<$div[1])
            {
                echo "SE\n";
            } else {
                echo "SO\n";
            }
        }
    }
?>