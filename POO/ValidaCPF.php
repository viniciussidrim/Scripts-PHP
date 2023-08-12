<?php

class validarCpf{

    private $cpf;

    public function __construct($cpf){
        $this->cpf = $cpf;
        $this->valor = '';
    }

    function validaQtdCaracteres(){
        $valor = preg_replace("/[^0-9]/", "", $this->cpf);
        if(strlen($valor) != 11){
            echo "CPF inválido";
            exit;
        }
        $this->valor = $valor;
    }

    function validaOriginalidade(){

        $noveDigitos = substr($this->valor, 0, 9);
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

        $dezDigitos = substr($this->valor, 0, 10);
        $array2 = str_split($dezDigitos);
        $terceiraCombinacao = 0;
        $segundoCalculo = 11;

        foreach($array2 as $value){
            $terceiraCombinacao += ($value * $segundoCalculo);
            $segundoCalculo = $segundoCalculo - 1;
        }

        $quanta_combinacao = ($terceiraCombinacao * 10) % 11;

        if($quanta_combinacao == 10){
            $quanta_combinacao = 0;
        }

        if($segunda_combinacao == substr($this->valor, 9, 1) && $quanta_combinacao == substr($this->valor, 10, 1)){
            echo "Este CPF é válido";
        }else{
            echo "Este CPF é inválido";
        }

    }

    public function resultado(){
        $this->validaQtdCaracteres();
        $this->validaOriginalidade();
    }

}

$p1 = new validarCpf('80327516291');
echo $p1->resultado();

//Sexta a noite, após 3 cervejas pensei em estudar POO e saiu
//esse ngc todo tronxo ai, vou validar se ta certo e refatorar,
//não fazia a minima ideia de como validava cpf, no fim parece
//ter dado bom