<?php
	session_start();
	if(!isset($_SESSION['Logado'])){
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Editar Informações | me Salva</title>
    <link rel="icon" href="IMG/icon.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>
</head>

<body>
    <br>
    <img src="IMG/whitebar.png">
    <button class="uk-button uk-button-secondary uk-margin-small-right" type="button"
        uk-toggle="target: #offcanvas-usage">Menu</button>
    <div id="offcanvas-usage" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <h3>Está a fim de ajudar?</h3>
            Procurar levantamento:
            <div class="uk-margin">
                <form class="uk-search uk-search-default">
                    <a uk-search-icon></a>
                    <input class="uk-search-input" type="search" placeholder="Procurar..."><button type="submit" class="uk-button uk-button-default" style="position:absolute; top:1%; left:105%">Ir</button>
                </form>
            </div>
            Procurar por usuário:
            <div class="uk-margin">
                <form class="uk-search uk-search-default" action="../Controller/selectUsuarioM.php" method="post">
                    <a uk-search-icon></a>
                    <input class="uk-search-input" name="selectUsuario" type="search" placeholder="Procurar..."><button type="submit" class="uk-button uk-button-default" style="position:absolute; top:1%; left:105%">Ir</button>
                </form>
            </div>
            <h3>O que você precisa?</h3>
            <ul class="uk-nav uk-dropdown-nav">
                <li><a href="levantamento.php">Seus levantamentos</a></li>
                <li><a href="criarLevantamento.php">Novo levantamento</a></li>
                <li><a href="editar.php">Editar informações</a></li>
                <li><a href="feedback.php">Reportar um erro</a></li>
            </ul>
        </div>
    </div>
    <img src="IMG/longbar.png">
    <button class="uk-button uk-button-secondary" type="button" uk-toggle="target: #offcanvas-flip">Mais</button>
    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-nav uk-dropdown-nav">
                <h3>Mais opções, olha só!</h3>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="options.html">Opções</a></li>
                <li><a href="../Controller/deslogar.php">Sair</a></li>
            </ul>
        </div>
    </div>
    <center>
<form id="update" action="../Controller/update.php" method="post">
    <h3>É sempre bom mudar!</h3>
    <b>CPF:</b>
    <input type="text" name="cpf2" value="<?php echo "$_SESSION[cpf]"?>">
    <br><br>
    <b>Nome:</b>
    <input type="text" size="50" name="nome2" value="<?php echo "$_SESSION[nome]"?>">
    <br><br>
    <b>Email:</b>
    <input type="email" name="email2" value="<?php echo "$_SESSION[email]"?>">
    <b>Nome de usuário:</b>
    <input type="text" name="nick2" value="<?php echo "$_SESSION[nick]"?>">
    <br><br>
    <b>Senha:</b>
    <input type="password" name="senha2" pattern=".{8,}" title="A senha deve contar mais que 8 (oito) caracteres.">
    <b>Confirmar senha:</b>
    <input type="password" name="confirmaSenha2" pattern=".{8,}" title="A senha deve contar mais que 8 (oito) caracteres.">
    <br><br><br>
    <button class="uk-button uk-button-secondary" type="submit" href="../Controller/update.php">Alterar</button>
    <a class="uk-button uk-button-secondary" href="perfil.php">Cancelar</a>
</form>
<form id="deleta" action="../Controller/deleteUsuario.php" method="post">
<br>
<button class="uk-button uk-button-secondary" type="submit" href="../Controller/deleteUsuario.php">Excluir Perfil</button>
</form>
    <br><br><br><br><br><br>
    v1.0.7 Iris Software Studio, Inc.
    </center>
</body>

</html>