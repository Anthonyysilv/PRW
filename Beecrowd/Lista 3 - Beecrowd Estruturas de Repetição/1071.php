<?php
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$lower = min($x, $y);
$highest = max($x, $y);

$result = 0;

for ($i = $lower+1; $i < $highest; $i++) {
    if ($i % 2 != 0) {
        $result += $i;
    }
}

echo "$result\n";
?>