<?php
$qtdPequena = $_GET['qtdPequena'];
$qtdMedia = $_GET['qtdMedia'];
$qtdGrande = $_GET['qtdGrande'];

$totalPequena = $qtdPequena * 10;
$totalMedia = $qtdMedia * 12;
$totalGrande = $qtdGrande * 15;

$totalVenda = $totalPequena + $totalMedia + $totalGrande;

echo "Valor arrecadado: R$ ".$totalVenda;
?>