<?php
    list ($a, $b) = explode (' ', readline());
    if (($a%$b) == 0 || ($b%$a) == 0)
    {
        echo "Sao multiplos\n";
    } else
    {
        echo "Nao sao multiplos\n";
    }
?>