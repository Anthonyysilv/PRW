<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    $Duvida1 = readline();
    $Duvida2 = readline();
    $Duvida1 = str_split($Duvida1);
    $Duvida2 = str_split($Duvida2);
    $adivinhar = readline();
    $adivinhar = str_split($adivinhar);
    $adivinharCarac = array_keys($adivinhar, "_");
    if ($Duvida1[$adivinharCarac[0]] == $Duvida2[$adivinharCarac[1]] || $Duvida1[$adivinharCarac[1]] == $Duvida2[$adivinharCarac[0]])
        $res = "Y\n";
    else
    $res = "N\n";
    echo $res;
}