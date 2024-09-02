<?php
$json = file_get_contents('data.json');

$data = json_decode($json, true);

$faturamento = array_filter($data['faturamento']);

$menor = min($faturamento);
$maior = max($faturamento);

$media = array_sum($faturamento) / count($faturamento);

$diasAcimaDaMedia = array_filter($faturamento, function($valor) use ($media) {
    return $valor > $media;
});

echo "Menor valor de faturamento: R$ " . number_format($menor, 2) . "\n";
echo "<br/>";
echo "Maior valor de faturamento: R$ " . number_format($maior, 2) . "\n";
echo "<br/>";
echo "Número de dias com faturamento acima da média: " . count($diasAcimaDaMedia) . "\n";
