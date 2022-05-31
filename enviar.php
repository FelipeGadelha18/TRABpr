<?php

$nome = $_POST['name'];
$genero = $_POST['genero'];
$estado = $_POST['estado'];
$qtdIrmaos = $_POST['irmao'];
foreach ($qtdIrmaos as $val) {
    $msg .= $val . ", ";
}

echo "O nome é $nome, o gênero é $genero, o estado é $estado e são $msg irmãos.";

?>