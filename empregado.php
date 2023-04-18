<?php

class Empregado {
    var $nome;
    var $cpf;
    var $sobrenome;

    function inss($salario){
        if ($salario < 1301){
            ($salario - ($salario*0.075));
        }
        if ($salario >= 1302.01 && $salario <= 2571.29){
            ($salario - ($salario*0.09));
        }
        if ($salario >= 2571.30 && $salario <= 3856.94){
            ($salario - ($salario*0.12));
        }
        else{
            ($salario - ($salario*0.14));
        }
        return $salario;
    }

    function irrf($salario){
        if ($salario <= 1903.98){

        }
        if ($salario >= 1903.99 && $salario <= 2826.65){
            ($salario - ($salario*0.075));
        }
        if ($salario >= 2826.66 && $salario <= 3751.05){
            ($salario - ($salario*0.15));
        }
        if ($salario >= 3751.06 && $salario <= 4664.68){
           ($salario - ($salario*0.225));
        }
        else{
            ($salario - ($salario*0.275));
        }

        return $salario;

    }
    function somando($salario){
        return ($salario - ($this->inss($salario) + $this->irrf($salario)));
    } 
    function cad0__construct(){}

    function cad__construct($nome, $cpf, $sobrenome){
        $this -> nome = $nome;
        $this -> cpf = $cpf; 
        $this -> sobrenome = $sobrenome;
    }
    
}


?>