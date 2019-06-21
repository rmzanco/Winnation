<?php
	include "conexao.php";
	
	
	$link=conectar();
	
	$cod=$_GET["cod_forn"];
	
	$SQL="DELETE FROM fornecedor WHERE cod_forn=$cod";
	$resul=mysqli_query($link,$SQL);
	
	echo "<script>alert('Fornecedor excluido c/ sucesso!');</script>";
	echo "<script>window.location.href='listar.php'</script>";
?>