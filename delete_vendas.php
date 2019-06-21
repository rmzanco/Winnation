<?php
	include "conexao.php";
	
	
	$link=conectar();
	
	$cod=$_GET["cod_venda"];
	
	$SQL="DELETE FROM vendas WHERE cod_venda=$cod";
	$resul=mysqli_query($link,$SQL);
	
	echo "<script>alert('Venda excluída com sucesso!');</script>";
	echo "<script>window.location.href='listar.php'</script>";
?>