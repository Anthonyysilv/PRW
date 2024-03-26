<?php
$N = intval(readline());
$letras = ['a' => '2', 'b' => '22', 'c' => '222', 'd' => '3', 'e' => '33', 'f' => '333', 'g' => '4', 'h' => '44', 'i' => '444', 'j' => '5', 'k' => '55', 'l' => '555', 'm' => '6', 'n' => '66', 'o' => '666', 'p' => '7', 'q' => '77', 'r' => '777', 's' => '7777', 't' => '8', 'u' => '88', 'v' => '888', 'w' => '9', 'x' => '99', 'y' => '999', 'z' => '9999', " " => '0'];
for ($i = 0; $i < $N; $i++) {
    $resposta = "";
    $palavra = str_split(readline());
    for ($c = 0; $c < count($palavra); $c++) {
        if ($c != 0)
            if (substr($letras[strtolower($palavra[$c])], 0, 1) == substr($letras[strtolower($palavra[$c - 1])], 0, 1) && !ctype_upper($palavra[$c]))
                $resposta .= '*';
        if (ctype_upper($palavra[$c]))
            $resposta .= '#' . $letras[strtolower($palavra[$c])];
        else
            $resposta .= $letras[$palavra[$c]];
    }
    echo "$resposta\n";
}