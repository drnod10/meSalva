<?php
require_once "../Model/conexao.php";
require_once "Usuario.php";
require_once "SelectUsuario.php";
require_once "../Model/bdUsuario.php";
require_once "../View/levantamentoUsuario.php";
?>

<?php

  session_start();

	$select = new SelectUsuario();

	$select->criador=$_POST["selectUsuario"];
    
    listarLevantamentoUsuario($conexao,$select);

?>