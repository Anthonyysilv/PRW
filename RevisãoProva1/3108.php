<?php
    $n = intval(readline());
    for ($i=0; $i <$n; $i++)
    {
        $frase=readline();
        $frase=implode(" ", array_reverse(explode(" ", $frase)));
        for ($j=0;$j<strlen($frase);$j++)
        {
            if($frase[$j]=="P"){
                $frase[$j]="B";
            } else if ($frase[$j]=="F"){
                $frase[$j]="V";
            } else if ($frase[$j]=="T"){
                $frase[$j]="D";
            } else if ($frase[$j]=="R"){
                $frase[$j]="L";
            } else if ($frase[$j]=="J"){
                $frase[$j]="Z";
            } else if ($frase[$j]=="X"){
                $frase[$j]="S";
            }
        }
        echo "$frase\n";
    }
?>