<?php
while ($n = fgets(STDIN)) {
    $numA = (int)$n;
    $strRes = "";
    for ($i = 0; $i <= $numA; $i++) {
        if ($i % 2 != 0) {
            for ($c = 0; $c < (($numA - $i) / 2); $c++) {
                $strRes .= " ";
            }
            for ($c = 0; $c < $i; $c++) {
                $strRes .= "*";
            }
            $strRes .= "\n";
        }
    }
    for ($c = 0; $c < (($numA - 1) / 2); $c++) {
        $strRes .= " ";
    }
    $strRes .= "*";
    $strRes .= "\n";
    for ($c = 0; $c < (($numA - 3) / 2); $c++) {
        $strRes .= " ";
    }
    $strRes .= "***";
    $strRes .= "\n\n";
    echo "$strRes";
}