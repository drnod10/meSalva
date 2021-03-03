<script>
	var res = confirm("Deseja realmente excluir o seu perfil? Essa ação é irreversível.");
	if(res == true){
		window.location.href="delete.php";
	}
	else
		window.location.href="../View/perfil.php";
</script>