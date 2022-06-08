<?php 
$servidor = "localhost"; 
$bdname = "cadastro"; 
$usuario = "root";
$senha = ""; 

$conexao = myqli_connect($servidor, $bdname, $usuario, $senha);

if($conexao){
    die("Problema na conexão ao banco de dados");
}

echo {
    "Teste realizado com sucesso"
};



?>