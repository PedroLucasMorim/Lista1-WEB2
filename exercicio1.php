<!-- 1.Leia 4 (quatro) números;
Calcule o quadrado de cada um;
Se o valor resultante do quadrado do terceiro for >= 1000, imprima-o e finalize;
Caso contrário, imprima os valores lidos e seus respectivos quadrados. -->

<?php
$numeros1 = rand(1,100);
$numeros2 = rand(1,100);
$numeros3 = rand(1,100);
$numeros4 = rand(1,100);

$cartola = array($numeros1,$numeros2,$numeros3,$numeros4);

echo "Aqui tem 4 números aleatórios: ";
print_r($cartola);

$informatico1 = $numeros1*$numeros1;
$informatico2 = $numeros2*$numeros2;
$informatico3 = $numeros3*$numeros3;
$informatico4 = $numeros4*$numeros4;

if ($informatico3>=1000){
    echo "O quadrado do terceiro:  $informatico3";
}
    else{
    echo "O quadrado dos números:  $informatico1, $informatico2,$informatico3,$informatico4";
    }

?>
