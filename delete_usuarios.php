<?php
	include "conexao.php";
	
	
	$link=conectar();
	
	$cod=$_GET["cod_usuario"];
	
	$SQL="DELETE FROM usuario WHERE cod_usuario=$cod";
	$resul=mysql_query($SQL,$link);
	
	echo "<script>alert('Usuário excluído com sucesso!');</script>";
	echo "<script>window.location.href='listar_usuarios.php'</script>";
?>