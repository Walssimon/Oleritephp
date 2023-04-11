<?php
    include_once "empregado.php";

    $emp = new Empregado;
    $emp -> salario = 1200;
    $emp -> inss($salario);

    echo "{$emp -> inss($emp -> salario)} ";
?>