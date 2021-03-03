<?php require_once "../Model/conexao.php"?>
<?php require_once "../Model/bdusuario.php"?>
<?php require_once "Usuario2.php"?>

<?php
	session_start();
	
	$Usuario2 = new Usuario2();
	
    $usuario2->nome2=$_POST["nome2"];
    $usuario2->nick2=$_POST["nick2"];
	$usuario2->email2=$_POST["email2"];
    $usuario2->senha2=$_POST["senha2"];
    $usuario2->confirmaSenha2=$_POST["confirmaSenha2"];
	$usuario2->cpf2=$_POST["cpf2"];
	
	alteraUsuario($conexao, $usuario2);
	header("Location: ../View/perfil.php");
	
?>