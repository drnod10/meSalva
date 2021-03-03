<?php
require_once "../Model/conexao.php";
require_once "Usuario.php";
require_once "Levantamento.php";
require_once "../Model/bdUsuario.php";
?>

<?php

  session_start();

	$levantamento = new Levantamento();

    $levantamento->nome=$_POST["nome"];
    $levantamento->usuarioCriador=$_SESSION["nick"];
	$levantamento->descricao=$_POST["descricao"];
	$levantamento->valor=$_POST["valor"];
	
	insereLevantamento($conexao, $levantamento);

?>