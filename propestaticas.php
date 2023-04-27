<?php



class Aplicacao{
    static $Quantidade;
function __contruct($Nome){
    self::$Quantidade++;
    $i = self::$Quantidade;
    echo "Nova Aplicação número . $i: $Nome <br>";
}
}

new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo '<br>Quantidade de aplicações = ' . Aplicacao::$Quantidade . "<br>";
?>