<?php

/*2) Crie um algoritmo que solicite a entrada de um número, e 
exiba a tabuada de 0 a 10 de acordo com o número solicitado*/

$numero = 7;

for ($valor = 0; $valor < 11; $valor++){
    $resultado = $numero * $valor;
    echo "{$numero} + {$valor} = {$resultado}\n";
}

?>