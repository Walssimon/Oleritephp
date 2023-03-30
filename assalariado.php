<?php

    class assalariado
    {
     var $salario;
     var $fgts = 0.08;
     var $inss = 0.075;
   
    

function descontosA($desconto){
    if ($desconto > 0){
        $this -> salario - 0.08;

    }


    $this -> fgts = $this -> salario - ($this -> salario * $this -> fgts);
    $this -> inss = $this -> salario - ($this -> salario * $this -> inss);
    
   $this -> salario = $this -> salario - ($this -> inss + $this ->fgts);

    echo "seu salario é: {$this -> salario}";

} 

}   


?>