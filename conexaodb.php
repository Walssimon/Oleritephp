<?php
 $server_name = 'localhost';
 $user_name = 'admin';
 $password = 'admin';
 $dbname = 'funcionariodb';

 $conection = mysqli_connect($server_name,$user_name,$password,$dbname);

 mysqli_set_charset($conection, 'utf8');

 if (mysqli_connect_error()){
     echo "Erro ao conectar com o Banco de Dados". mysqli_connect_error();
 }

?>