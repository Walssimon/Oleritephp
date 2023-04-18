<?php
    include_once "empregado.php";

    class Assalariado extends Empregado{
     var $salario;
    
function Empregado__construct($nome, $sobrenome, $cpf,$salario){
			parent::cad__construct($nome, $sobrenome, $cpf,$salario);
			$this->salario = $salario;
		}

function somando($salario){
            return $salario; 
        }
}   


?>