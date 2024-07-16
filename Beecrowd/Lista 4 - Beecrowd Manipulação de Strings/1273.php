<?php
$N = intval(readline());
while (true) {
    if ($N == 0)
        break;
    $resposta = "";
    $entrada = [];
    for ($i = 0; $i < $N; $i++) {
        array_push($entrada, readline());
    }
    $maior = 0;
    foreach ($entrada as $linha) {
        if (strlen($linha) > $maior)
            $maior = strlen($linha);
    }
    foreach ($entrada as $linha) {
        $linha = str_pad($linha, $maior, " ", STR_PAD_LEFT);
        echo $linha . "\n";
    }
    $N = intval(readline());
    if($N != 0)
    echo "\n";
}