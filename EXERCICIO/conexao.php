<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'etecmcm';

$conexao = new myqli($host,$usuario,$senha,$banco);

if($conexao->connect_error){
    die('Falha de Conexão' . $conexao->connect_error);
}

else{
        echo "CONECTADO COM SUCESSO";
}


?>