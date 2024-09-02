<?php
$estados = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$total = array_sum($estados);

foreach ($estados as $estado => $valor) {
    $percentual = ($valor / $total) * 100;
    echo "Percentual de $estado: " . number_format($percentual, 2) . "%\n";
    echo "<br/>";
}
