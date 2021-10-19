<?php

/*  Crie um algoritmo para calcular a média final de um aluno, para isso,solicite
a entrada de três notas e as insira em um array, por fim, calcule a média geral.
Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba
reprovado. Exiba também a média final calculada.Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado] */

$array = [6, 6, 9];

$resultado = ($array[0] + $array[1] + $array[2])/3;

if ($resultado >= 6){
    echo "Aprovado \n";
    echo "N1 = {$array[0]} | N2 = {$array[1]} | N3 = {$array[2]} | MG = {$resultado} [Aprovado]";
}else{
    echo "Reprovado \n";
    echo "N1 = {$array[0]} | N2 = {$array[1]} | N3 = {$array[2]} | MG = {$resultado} [Reprovado]";
}

?>