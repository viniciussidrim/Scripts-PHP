<?php

class Gerador {

    public string $cpf;
    public string $cnpj;

    public function ValidarCpf() {

        $valor = preg_replace("/[^0-9]/", "", $this->cpf);
        if(strlen($valor) != 11){
            echo "CPF inválido";
            exit;
        }

        $noveDigitos = substr($valor, 0, 9);
        $array = str_split($noveDigitos);
        $primeiraCombinacao = 0;
        $primeiroCalculo = 10;

        foreach($array as $value){
            $primeiraCombinacao += ($value * $primeiroCalculo);
            $primeiroCalculo = $primeiroCalculo - 1;
        }

        $segunda_combinacao = ($primeiraCombinacao * 10) % 11;

        if($segunda_combinacao == 10){
            $segunda_combinacao = 0;
        }

        $dezDigitos = substr($valor, 0, 10);
        $array2 = str_split($dezDigitos);
        $terceiraCombinacao = 0;
        $segundoCalculo = 11;

        foreach($array2 as $value){
            $terceiraCombinacao += ($value * $segundoCalculo);
            $segundoCalculo = $segundoCalculo - 1;
        }

        $quarta_combinacao = ($terceiraCombinacao * 10) % 11;

        if($quarta_combinacao == 10){
            $quarta_combinacao = 0;
        }

        if($segunda_combinacao == substr($valor, 9, 1) && $quarta_combinacao == substr($valor, 10, 1)){
            echo "Este CPF é válido";
        }else{
            echo "Este CPF é inválido";
        }
    }

    public function geradorCpf() {
        //Funções para gerar CPF válido
    }

}

$vinicius = new Gerador();
$vinicius->cpf = "09970831402";
$vinicius->ValidarCpf();
//echo "CPF: " . $vinicius->cpf;
