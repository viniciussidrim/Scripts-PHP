<?php

/* Ler um número inteiro entre 1 e 12 e escrever o mês correspondente.
Caso o número seja fora desse intervalo, informar que não existe mês
com este número.*/

$mes = ["", "Janeiro", "Fevereiro",
"Março", "Abril", "Maio", "Junho", "Julho", "Agosto",
"Setemrbo", "Outubro", "Novembro", "Dezembro"];

$valor = -1;

if ($valor >12 || $valor <1){
    echo "Mês inválido";
}else{
    $resultado = ($mes[$valor]);
    echo "{$resultado}";
}

?>