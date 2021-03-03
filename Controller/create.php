<?php
require_once "../Model/conexao.php";
require_once "Usuario.php";
require_once "../Model/bdUsuario.php";
?>

<?php

  session_start();

	$usuario = new Usuario();

	$usuario->nome=$_POST["nome"];
	$usuario->nick=$_POST["nick"];
	$usuario->email=$_POST["email"];
	$usuario->senha=$_POST["senha"];
	
	$sq = "SELECT * FROM `usuario` WHERE `nick` = '$usuario->nick'"; 
	$verifica_nick = mysqli_query($conexao,$sq);
	if(mysqli_num_rows($verifica_nick) == 1){
		header("Location: ../View/erro.html");
	}
	else{
	insereUsuario($conexao, $usuario);
	header("Location: ../index.php");
	echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
	}

?>