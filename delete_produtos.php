<?php
	include "conexao.php";
	
	
	$link=conectar();
	
	$cod=$_GET["cod_prod"];
	
	$SQL="DELETE FROM produtos WHERE cod_prod=$cod";
	$resul=mysqli_query($link,$SQL);
	
	echo "<script>alert('Produto excluído com sucesso!');</script>";
	echo "<script>window.location.href='listar.php'</script>";
?>