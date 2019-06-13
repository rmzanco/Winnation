<?php
	include "conexao.php";
	
	
	$link=conectar();
	
	$cod=$_GET["cod_venda"];
	
	$SQL="DELETE FROM vendas WHERE cod_venda=$cod";
	$resul=mysql_query($SQL,$link);
	
	echo "<script>alert('Venda excluída com sucesso!');</script>";
	echo "<script>window.location.href='listar_usuarios.php'</script>";
?>