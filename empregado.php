<?php

class Empregado {
    var $nome;
    var $cpf;
    var $sobrenome;
    var $salario;

    function inss($salario){
        if ($salario < 1301){
            return($salario - ($salario*0.075));
        }
    }

    function irrf($salario){
        if ($salario <= 1903.98){

        }
        if ($salario >= 1903.99 && $salario <= 2826.65){
            return($salario * 0.075);
        }



    }

    function cad0__construct(){}

    function cad__construct($nome, $cpf, $sobrenome, $salario){
        $this -> nome = $nome;
        $this -> cpf = $cpf; 
        $this -> sobrenome = $sobrenome;
        $this -> salario = $salario;
    }
    
}


?>