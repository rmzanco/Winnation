<?php
	include "conexao.php";
	
	
	$link=conectar();
	
	$cod=$_GET["cod_prod"];
	
	$SQL="DELETE FROM produtos WHERE cod_prod=$cod";
	$resul=mysql_query($SQL,$link);
	
	echo "<script>alert('Produto excluído com sucesso!');</script>";
	echo "<script>window.location.href='listar_usuarios.php'</script>";
?>