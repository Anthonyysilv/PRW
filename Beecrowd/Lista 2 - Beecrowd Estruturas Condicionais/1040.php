<?php
$entrada = explode(" ", readline());
$N1 = floatval($entrada[0]);
$N2 = floatval($entrada[1]);
$N3 = floatval($entrada[2]);
$N4 = floatval($entrada[3]);
$media = ((2 * $N1 + 3 * $N2 + 4 * $N3 + 1 * $N4) / 10);
$media = intval($media * 10);
$media = $media / 10;
if ($media >= 5 && $media <= 6.9)
    $notaExame = floatval(readline());
echo "Media: " . number_format($media, 1, '.', '') . "\n";
if ($media >= 7.0)
    echo "Aluno aprovado.\n";
elseif ($media < 5.0)
    echo "Aluno reprovado.\n";
elseif ($media >= 5 && $media <= 6.9) {
    echo "Aluno em exame.\n";
    echo "Nota do exame: " . number_format($notaExame, 1, '.', '') . "\n";
    $media = ($media + $notaExame) / 2;
    if ($media >= 5.0)
        echo "Aluno aprovado.\n";
    elseif ($media <= 4.9)
        echo "Aluno reprovado.\n";
    echo "Media final: " . number_format($media, 1, '.', '') . "\n";
}