<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$d = trim(fgets(STDIN));
$e = trim(fgets(STDIN));

$numbers = [$a,$b,$c,$d,$e];

[$count] == 0;

foreach($numbers as $number){
    if(abs($number) % 2 == 0){
        $count++;
    }
}

echo "$count valores pares\n";
?>