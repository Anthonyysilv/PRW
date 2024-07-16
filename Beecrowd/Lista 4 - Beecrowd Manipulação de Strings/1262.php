<?php
while ($R = strval(fgets(STDIN))) {
    $P = intval(readline());
    preg_match_all("/(W)|(R{1,$P})/", $R, $processos);
    echo count($processos[0]) . "\n";
}