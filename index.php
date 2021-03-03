<?php
	if(isset($_SESSION['Logado'])){
		header("Location: ..View/perfil.php");
		die();
	}
?>	

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>me Salva!</title>
    <link rel="icon" href="View/IMG/icon.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>
</head>

<body>
    <center>
        <br>
        <img src="View/IMG/logo.png">
        <br><br>
        Precisando de uma ajudinha pra bicicleta nova, ou pra abrir aquele negócio? A gente ajuda!
        <h4>Ainda não tem conta?</h4>
        <button class="uk-button uk-button-secondary uk-margin-small-right" type="button"
            uk-toggle="target: #offcanvas-usage">Crie sua Conta</button>
<form id="cadastro" action="Controller/create.php" method="post">
        <div id="offcanvas-usage" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <h3>Só precisamos de algumas informações...</h3>
                Nome completo: <img src="View/IMG/bar.png" width="120px">
                <input type="text" size="30" name="nome" required="required" title="Este campo não pode ficar vazio.">
                Nome de usuário: <img src="View/IMG/bar.png" width="120px">
                <input type="text" size="30" name="nick" required="required" title="Este campo não pode ficar vazio.">
                Email: <img src="View/IMG/bar.png" width="200px">
                <input type="email" size="30" name="email" title="Este campo não pode ficar vazio.">
                Senha: <img src="View/IMG/bar.png" width="195px">
                <input type="password" size="30" name="senha" required="required" title="Este campo não pode ficar vazio.">
                Confirme a senha: <img src="View/IMG/bar.png" width="115px">
                <input type="password" size="30" name="confirmaSenha" required="required" title="Este campo não pode ficar vazio.">
                <br><br>
                <button type="submit" class="uk-button uk-button-default">Bora Lá!</button>
                <br><br>
                Por questões de segurança, não solicitamos dados financeiros nesta tela. Mas poderão ser informados
                assim que a conta for iniciada.
            </div>
        </div>
</form>
        <h4>Já tem conta?</h4>
        <button class="uk-button uk-button-secondary" type="button" uk-toggle="target: #offcanvas-flip">Faça
            Login</button>
<form id="login" action="Controller/login.php" method="post">
        <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <h3>Bem-vindo(a) de volta!</h3>
                Email: <img src="View/IMG/bar.png" width="200px">
                <input type="email" size="30" name="emailLogin" required="required">
                <br><br>
                Senha: <img src="View/IMG/bar.png" width="195px">
                <input type="password" size="30" name="senhaLogin" required="required">
                <br><br>
                <button type="submit" class="uk-button uk-button-default">Entrar</button>
                <br>
                <br>
                <ul class="uk-nav uk-dropdown-nav">
                </ul>
                <br><br>
            </div>
        </div>
</form>
        <br><br>
        Powered by
        <a href="https://boacompra.com/"><img src="View/IMG/boacompra.png"></a>
        <hr class="uk-divider-icon">
        v1.0.7 Iris Software Studio, Inc.
        <img src="View/IMG/whitebar.png" width="2px">
        <a href="https://www.facebook.com/irisoftwarestudiofficial"><img src="View/IMG/facebook.ico" height="20px"
                width="20px"></a>
        <img src="View/IMG/mediumbar.png">
        <a href="View/sobre.html">Sobre</a>
        <br>
    </center>
</body>

</html>