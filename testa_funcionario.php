<?php 
    include_once 'funcionario.php';

    $Pedro = new Funcionario ();
    $Pedro -> setSalario(876);
    echo 'salario: R$'.$Pedro->getSalario();

?>