<?php
require_once "../Model/conexao.php";

        $valor = $_POST['valorAtualizado'];
        $pagina_atual = $_POST['pagina'];

        $sql = "UPDATE levantamento SET valorAtual = '$valor' WHERE id = '$pagina_atual'";

        $resultado = mysqli_query($conexao,$sql);
        header("Location: ../View/perfil.php");
?>