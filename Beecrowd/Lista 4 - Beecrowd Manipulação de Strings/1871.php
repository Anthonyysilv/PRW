<?php
list($a, $b) = explode(" ", readline());
while ($a != 0 && $b != 0) {
    $a += $b;
    $a = str_replace('0', "", strval($a));
    echo "$a\n";
    list($a, $b) = explode(" ", readline());
}