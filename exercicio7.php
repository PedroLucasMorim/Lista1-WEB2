
<!-- Construa um algoritmo que popule um array com 500 valores inteiros e positivos
e:
• Encontre o maior valor
• Encontre o menor valor
• Calcule a média dos números lidos -->

<?php

$numeros = [];
$soma = 0;

for ($i = 0; $i < 500; $i++) {
    $numero = rand(1, 1000);
    $numeros[] = $numero;
    $soma += $numero; 
}

$maior_valor = max($numeros); 
$menor_valor = min($numeros); 
$media = $soma / count($numeros);

echo "Maior valor: $maior_valor\n";
echo "Menor valor: $menor_valor\n";
echo "Média dos valores: " . number_format($media, 2) . "\n";




?>