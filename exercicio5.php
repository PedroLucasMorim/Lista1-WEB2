
<!-- Elabore um algoritmo que dada a idade de um nadador classifique-o em uma
das seguintes categorias:
Infantil A = 5 a 7 anos
Infantil B = 8 a 11 anos
Juvenil A = 12 a 13 anos
Juvenil B = 14 a 17 anos
Adultos = Maiores de 18 anos -->

<?php

$idade= rand(5,50);
echo "Idade do Nadador: $idade anos";

if($idade<=7){
    echo "Infantil A= 5 a 7 anos";
}
    elseif ($idade<=11){
        echo "Infantil B= 8 a 11 anos";
    }
    elseif($idade<=13){
            echo "Juvenil A= 12 a 13 anos";
        }
        elseif($idade<=17){
                echo "Juvenil B= 14 a 17 anos";
            }
    else {
        echo "Adultos = Maiores de 18 anos";

    }


?>