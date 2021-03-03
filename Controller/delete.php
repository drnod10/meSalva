<?php require_once "../Model/conexao.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "../Model/bdusuario.php"?>

<?php

  session_start();
  deletaUsuario($conexao, $dados);

?>