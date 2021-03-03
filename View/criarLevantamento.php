<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Criar Levantamento | me Salva!</title>
    <link rel="icon" href="IMG/icon.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>
</head>

<body>

    <form id="criarlevantamento" action="../Controller/createLevantamento.php" method="post">
        <center>
            <br>
            <h3>Criar Levantamento</h3>
            Nome do levantamento:
            <br>
            <input type="text" name="nome" size="30">
            <br><br>
            Descrição:
            <br>
            <textarea rows="10" cols="50" name="descricao"></textarea>
            <br><br>
            Valor (R$):
            <input type="text" name="valor">
            <br><br>
            <a href="../View/perfil.php" class="uk-button uk-button-secondary uk-margin-small-right">Cancelar</a>
            <button class="uk-button uk-button-secondary" type="submit">Criar</button>
            <br><br><br><br><br>
            v1.0.7 Iris Software Studio, Inc.
        </center>
    </form>
</body>

</html>