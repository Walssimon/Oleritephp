<?php
include_once 'conexaodb.php';
include_once 'inicio.html';
 imprime();
?>

<div> 
    <h3> Nome: </h3>
    <input type="text" name="nome" id="nome">
    <label for="nome">Nome</label> 
</div> 

<div> 
    <h3> Sobrenome: </h3>
    <input type="text" name="sobrenome" id="sobrenome">
    <label for="sobrenome">Sobrenome</label> 
</div> 

<div> 
    <h3> CPF: </h3>
    <input type="text" name="cpf" id="cpf">
    <label for="cpf">CPF</label> 
</div> 

<div> 
    <h3> Salario </h3>
    <input type="text" name="salario" id="salario">
    <label for="salario">Salario</label> 
</div> 

<form method="$_POST">
<fieldset>
<legend>Tipo de contrato</legend>

    <div>
    <input type="radio" id="assalariado" name="tipocon" value="assalariado" checked>
    <label for="assalariado"> Assalariado</label>
    </div>

    <div>
    <input type="radio" id="comissionado" name="tipocon" value="comissionado" checked>
    <label for="comissionado"> Comissionado</label>
    </div>

    <div>
    <input type="radio" id="horista" name="tipocon" value="horista" checked>
    <label for="horista"> horista</label>
    </div>

</fieldset>
</form>

<button type="submit" name="btn-cadastrar"><a href="#"></a>  Cadastrar</button>








