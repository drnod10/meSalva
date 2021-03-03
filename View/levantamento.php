<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Levantamento | me Salva</title>
    <link rel="icon" href="IMG/icon.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>
</head>

<body>
    <br>
    <img src="IMG/whitebar.png" width="15px">
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
                    <input class="uk-search-input" type="search" name="selectUsuario" placeholder="Procurar..."><button type="submit" class="uk-button uk-button-default" style="position:absolute; top:1%; left:105%">Ir</button>
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
    <button class="uk-button uk-button-secondary" type="button" uk-toggle="target: #offcanvas-flip">Opções</button>
    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-nav uk-dropdown-nav">
                <h3>Pra onde quer ir?</h3>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="options.php">Opções</a></li>
                <li><a href="../Controller/deslogar.php">Sair</a></li>
            </ul>
        </div>
    </div>
    <center>
    <?php
    require_once "../Model/bdUsuario.php";
    listarLevantamento($conexao);
    ?>
        <br>
        v1.0.7 Iris Software Studio, Inc.
        <br><br><br>
    </center>
</body>

</html>