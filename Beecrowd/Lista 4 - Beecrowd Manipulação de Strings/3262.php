<?php
$N = 5;
$entrada = [];
while ($N--) {
    array_push($entrada, str_split(readline()));
}
$entrada = array_chunk($entrada, 4);
foreach ($entrada[0] as $linha){
foreach ($linha as $coluna)
    echo($coluna);
echo "\n";}