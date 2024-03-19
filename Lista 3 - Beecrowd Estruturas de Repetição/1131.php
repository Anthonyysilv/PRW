<?php
$grenais = [
    'empates' => 0,
    'inter' => 0,
    'gremio' => 0,
];

fscanf(STDIN, "%d %d", $inter, $gremio);
newGrenal($inter, $gremio);

while (true) {
    echo "Novo grenal (1-sim 2-nao)\n";
    $y = trim(fgets(STDIN));

    if ($y == 1) {
        fscanf(STDIN, "%d %d", $inter, $gremio);
        newGrenal($inter, $gremio);
    } elseif ($y == 2) {
        break;
    }
}

function newGrenal($inter, $gremio)
{
    global $grenais;

    if ($inter == $gremio) {
        $grenais['empates']++;
    } elseif ($inter > $gremio) {
        $grenais['inter']++;
    } else {
        $grenais['gremio']++;
    }
}

echo array_sum($grenais) . " grenais\n";
echo "Inter:" . $grenais['inter'] .  "\n";
echo "Gremio:" . $grenais['gremio'] .  "\n";
echo "Empates:" . $grenais['empates'] .  "\n";

if ($grenais['inter'] == $grenais['gremio']) {
    echo "Não houve vencedor\n";
} elseif ($grenais['inter'] > $grenais['gremio']) {
    echo "Inter venceu mais\n";
} else {
    echo "Gremio venceu mais\n";
}
?>