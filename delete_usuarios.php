<?php
	include "conexao.php";
	/* asdasdasdasd */
	
	$link=conectar();
	
	$cod=$_GET["cod_usuario"];
	
	$SQL="DELETE FROM usuario WHERE cod_usuario=$cod";
	$resul=mysqli_query($link,$SQL);
	
	echo "<script>alert('Usuário excluído com sucesso!');</script>";
	echo "<script>window.location.href='listar.php'</script>";
?>