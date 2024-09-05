
<!-- Elabore um programa que leia as variáveis C e N, respectivamente código e número de
horas trabalhadas de um operário. E calcule o salário sabendo-se que ele ganha R$ 10,00
por hora. Quando o número de horas exceder a 50 calcule o excesso de pagamento
armazenando-o na variável E, caso contrário zerar tal variável. A hora excedente de
trabalho vale R$ 20,00. No final do processamento imprimir o salário total e o salário
excedente -->

<?php
$C = 53267;
echo "Código do Operário: $C ";

$N= 6;
echo "Horas trabalhadas: $N horas";

$dinheiros= $N*10;
echo "Salário do guri: R$ $dinheiros";

$extra = $dinheiros-50;

if($dinheiros>=50){
    $total=$extra*2;
   echo "Salário extra de R$ $total";
}
    else {
        echo "Salário total: R$ $dinheiros";
    }





?>