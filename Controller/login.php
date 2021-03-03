<?php require_once "../Model/conexao.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "../Model/bdUsuario.php"?>
<?php	
	session_start();
	if(isset($_SESSION['Logado'])){
		header("Location: ../View/perfil.php");
		die();
	}
	
	if (!empty($_POST) AND (empty($_POST['emailLogin']) OR empty($_POST['senhaLogin']))) 
	{
       echo "<script>alert('Você deve digitar um usuario e senha!')</script>"; exit;
	}
	else 
	{
		$email  = ($_POST["emailLogin"]);	 
		$senha = ($_POST["senhaLogin"]);
		$crip = md5($senha);
		$sql = "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha`= '$crip'"; 
		$result_id = mysqli_query($conexao,$sql) or die ("Erro no banco de dados!"); 
		$total = mysqli_num_rows($result_id);		
	
	if($total > 0)  
	{      
		$dados = mysqli_fetch_array($result_id);
	     
        $_SESSION['Logado'] = true;
        $_SESSION["id"] = $dados["id"]; 
        $_SESSION["nick"] = stripslashes($dados["nick"]); 
        $_SESSION["nome"]= $dados["nomeCompleto"];	
		$_SESSION["email"] = $dados["email"];			
        $_SESSION["senha"] = $dados["senha"];
        $_SESSION["cpf"] = $dados["cpf"];
        $_SESSION["dataCadastro"] = $dados["dataCadastro"];
        header("Location: ../View/perfil.php"); 
        exit; 
    
	}
	else 
	{
		header("Location: ../View/erro.html");
	}
    }

?>