<?php 

/*1)Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/

$x = -4;

if ($x > 0){
    echo ("O valor é positivo");
}elseif ($x = 0){
    echo ("O valor é igual a zero");
}else{
    echo ("O valor é negativo");
}

?>