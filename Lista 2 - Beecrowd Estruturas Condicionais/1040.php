<?php

    list($n1, $n2, $n3, $n4) = explode(" ", readline());
    $n1 = (float) $n1;
    $n2 = (float) $n2;
    $n3 = (float) $n3;
    $n4 = (float) $n4;
    $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 * 1)) / (2 + 3 + 4 + 1);
    $media = number_format($media, 1, ".", "");
    echo "Media: {$media}\n";
    if ($media >= 7.0){
        echo "Aluno aprovado.\n";
    }
    elseif ($media < 5.0){
        echo "Aluno reprovado.\n";
    }
    elseif (($media >= 5.0) and ($media < 7.0)){
        echo "Aluno em exame.\n";
        $pontuacao = readline();
        echo "Nota do exame: {$pontuacao}\n";
        $nova_media = ($media + $pontuacao) / 2;
        $nova_media = number_format($nova_media, 1, ".", "");
        if ($nova_media >= 5.0)
        {
            echo "Aluno aprovado.\n";
        }
        else{
            echo "Aluno reprovado.\n";
        }
        echo "Media final: {$nova_media}\n";
    }

?>