<?php

    list($cod, $qtd) = explode(" ", readline());
    $cod = (int) $cod;
    $qtd = (float) $qtd;
    if ($cod == 1){
        $qtd = 4.0 * $qtd;
        $qtd = number_format($qtd, 2, ".", "");
        echo "Total: R$ {$qtd}\n";
    }
    elseif ($cod == 2){
        $qtd = 4.50 * $qtd;
        $qtd = number_format($qtd, 2, ".", "");
        echo "Total: R$ {$qtd}\n";
    }
    elseif ($cod == 3){
        $qtd = 5.0 * $qtd;
        $qtd = number_format($qtd, 2, ".", "");
        echo "Total: R$ {$qtd}\n";
    }
    elseif ($cod == 4){
        $qtd = 2.0 * $qtd;
        $qtd = number_format($qtd, 2, ".", "");
        echo "Total: R$ {$qtd}\n";
    }
    elseif ($cod == 5){
        $qtd = 1.50 * $qtd;
        $qtd = number_format($qtd, 2, ".", "");
        echo "Total: R$ {$qtd}\n";
    }

?>