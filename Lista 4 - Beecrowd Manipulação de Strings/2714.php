<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    $resposta = "";
    $RA = str_split(readline());
    if (count($RA) < 20)
        $resposta = "INVALID DATA\n";
    else {
        $RAa = implode("", array_slice($RA, 0, 2));
        if ($RAa != "RA")
            $resposta = "INVALID DATA\n";
        else {
            $digitos = implode("", array_slice($RA, 2, 18));
            $resposta = intval($digitos) . "\n";
        }
    }
    echo $resposta;
}