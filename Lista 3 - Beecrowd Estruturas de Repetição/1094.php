<?php
$qntd_test = intval(fgets(STDIN));

$total = [
    'C' => 0,
    'R' => 0,
    'S' => 0,
];

$total_count = 0;

for ($i = 0; $i < $qntd_test; $i++) {
  $new_test = explode(' ', trim(fgets(STDIN)));
  $total[$new_test[1]] += $new_test[0];
  $total_count += $new_test[0];
}

$percent = [];

foreach($total as $key => $item){
    $percent[$key] = ($item/$total_count)*100;
}

echo "Total: " . $total_count . " cobaias\n";
echo "Total de coelhos: " . $total['C'] . "\n";
echo "Total de ratos: " . $total['R'] . "\n";
echo "Total de sapos: " . $total['S'] . "\n";
echo "Percentual de coelhos: " . sprintf('%.2f', $percent['C']) . " %\n";
echo "Percentual de ratos: " . sprintf('%.2f', $percent['R']) . " %\n";
echo "Percentual de sapos: " . sprintf('%.2f', $percent['S']) . " %\n";
?>