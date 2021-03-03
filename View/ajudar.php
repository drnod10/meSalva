<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Obrigado! | me Salva!</title>
    <link rel="icon" href="IMG/icon.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>
</head>

<body>
        <center>
            <br>
            <?php $pagina_atual = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT); ?>
        <h3>Toda ajuda é bem-vinda!</h3>
        <form id="updatevalor" action="../Controller/updatevalor.php" method="post">
        Número do cartão:
        <input type="text" size="20" placeholder="XXXX-XXXX-XXXX-XXXX">
        <br><br>
        Nome completo:
        <input type="text" size="20">
        <br><br>
        CVV:
        <input type="text" size="5" placeholder="XXX">
        Vencimento:
        <input type="text" size="5" placeholder="MM"><img src="../View/IMG/whitebar.png" width="3px"><input type="text" size="5" placeholder="AA">
        <br><br>
        Valor:
        <input type="text" size="10" name="valorAtualizado" placeholder="R$">
        <br><br><br>
        <button type="submit" href="obrigado.php" class="uk-button uk-button-secondary">Pronto</button>
        <a href="perfil.php" class="uk-button uk-button-secondary">Cancelar</a>
        <input type="hidden" size="20" name="pagina" value="<?php echo $pagina_atual;?>">
</form>
        <br><br><br><br><br><br><br><br><br><br>
            v1.0.7 Iris Software Studio, Inc.
        </center>
    </form>
</body>

</html>