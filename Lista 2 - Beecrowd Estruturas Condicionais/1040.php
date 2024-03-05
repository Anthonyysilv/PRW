<?php
    list ($n1, $n2, $n3, $n4) = explode (' ', readline());
    $n1 = (float) $n1;
    $n2 = (float) $n2;
    $n3 = (float) $n3;
    $n4 = (float) $n4;
    $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 * 1)) / 10;
    echo "Media: {$media}\n";
    if ($media >= 7.0)
    {
        echo "Aluno aprovado.\n";
    } else if ($media < 5.0)
    {
        echo "Aluno reprovado.\n";
    } else if ($media >= 5.0 && $media <= 6.9)
    {
        echo "Aluno em exame.\n";
        $notExame = explode (' ', readline());
        echo "Nota do exame: {$notExame}\n";
        $novaMedia = ($media + $notExame) / 2;
        if ($novaMedia >= 5.0)
        {
            echo "Aluno aprovado.\n";
            echo "Media final: {$novaMedia}\n";
        } else
        {
            echo "Aluno reprovado.\n";
            echo "Media final: {$novaMedia}\n";
        }
    }
?>