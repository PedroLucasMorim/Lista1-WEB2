
<!-- 2. Faça um programa que leia um número inteiro e indique se este número é par ou ímpar,e se é positivo ou negativo. -->
<?php

$numero=rand(-99,100);
print_r($numero);


if ($numero %2 == 0 && $numero>=0 ){
    echo "Este número é par, e positivo!";
   
}
    else{
        echo "Número impar, e negativo.";
    }




?>

