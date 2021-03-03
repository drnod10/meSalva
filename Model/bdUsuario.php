<?php 
require_once "conexao.php";
require_once "../Controller/Usuario.php";
require_once "../Controller/SelectUsuario.php";
require_once "../Controller/Usuario2.php";
?>

<?php

function insereUsuario($conexao,$usuario){	
	
	$cod = md5($_POST['senha']);
	$sql = "insert into usuario (nomeCompleto, nick, email, senha, cpf, dataCadastro)
	values ('$usuario->nome','$usuario->nick', '$usuario->email','$cod','Não Informado',CURDATE())";
		
	$resultado = mysqli_query($conexao, $sql);
}

function insereLevantamento($conexao,$levantamento){	
	
	$sql = "insert into levantamento (nome, usuarioCriador, descricao, valorAtual, valorAlvo, dataCriacao)
	values ('$levantamento->nome','$levantamento->usuarioCriador', '$levantamento->descricao', '0','$levantamento->valor',CURDATE())";
		
	$resultado = mysqli_query($conexao, $sql);
	header("location: ../View/perfil.php");
	echo "<script>alert('Levantamento cadastrado com sucesso!');</script>";
	
}

function listarUsuario($conexao){
	
	$sqt = "select * from usuario where id = '$_SESSION[id]'";
	
	$resultado = mysqli_query($conexao, $sqt);
	
	while($array=mysqli_fetch_assoc($resultado)){
	echo "<h3>".$array['nomeCompleto']."</h3>";
	echo "<b>E-Mail:</b> ".$array['email']."<br><br>"."<b>Nome de Usuário:</b> ".$array['nick']."<br>";
	echo "<b>Data de Cadastro:</b> ".$array['dataCadastro'];
	}
}

function listarLevantamento($conexao){

	session_start();

	$sqr = "select * from levantamento where usuarioCriador = '$_SESSION[nick]'";

	$resultado = mysqli_query($conexao, $sqr);

	while($array=mysqli_fetch_assoc($resultado)){
		echo "<h3>".$array['nome']."</h3>";
        echo "<b>Criado por</b>: @".$array['usuarioCriador']." <b>Em:</b> ".$array['dataCriacao'];
        echo "<br><br>";
        echo $array['descricao'];
        echo "<h3>R$".$array['valorAtual']."/"."R$".$array['valorAlvo']."</h3>";
        echo "<progress value= '$array[valorAtual]' max= '$array[valorAlvo]' ></progress>";
		echo "<br><br>";
		echo "<hr class='uk-divider-icon'>";
	}
}

	function listarLevantamentoUsuario2($conexao){

		$sqr = "select * from levantamento";
	
		$resultado = mysqli_query($conexao, $sqr);
	
		while($array=mysqli_fetch_assoc($resultado)){
			echo "<h3>".$array['nome']."</h3>";
			echo "<b>Criado por</b>: @".$array['usuarioCriador']." <b>Em:</b> ".$array['dataCriacao'];
			echo "<br><br>";
			echo $array['descricao'];
			echo "<h3>R$".$array['valorAtual']."/"."R$".$array['valorAlvo']."</h3>";
			echo "<progress value=".$array['valorAtual']."max=".$array['valorAlvo']."></progress>";
			echo "<br><br>";
			echo "<a href='ajudar.php?id=".$array['id']."' class='uk-button uk-button-secondary' type='submit'>Ajudar ❤</a>";
			echo "<hr class='uk-divider-icon'>";
	}
		}
	
function alteraUsuario($conexao, $usuario2){
	
	$cod2 = md5($_POST['senha2']);
	$sql = ("UPDATE `usuario` SET 
	`nomeCompleto` = '$usuario2->nome2', `nick` = '$usuario2->nick2', `cpf` = '$usuario2->cpf2', `email` = '$usuario2->email2', `senha` = '$cod2' 
	WHERE `usuario`.`id` = '$_SESSION[id]'") or die(mysqli_error());
	
	$resultado = mysqli_query($conexao,$sql);
	return $resultado;

}

function deletaUsuario($conexao, $dados){
	
	$sql = "DELETE FROM usuario WHERE id = '$_SESSION[id]'";	
		$resultado = mysqli_query($conexao, $sql);
		session_destroy();
		header("location: ../index.php");
	}

?>