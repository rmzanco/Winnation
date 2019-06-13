<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>insert</title>
</head>

<body>
<?php
include "conexao.php";

$link=conectar(); // chama a função conectar, presente no conexao.php 

$nome=$_POST["nome_produto"];
$cod_forn=$_POST["cod_forn"];
$estoque=$_POST["estoque"];
$tipo=$_POST["tipo_prod"];
$desc=$_POST["desc"];

$SQL="INSERT INTO produtos (nome,cod_forn,quantidade_estoque,tipo_prod,descricao) VALUES ('$nome','$cod_forn','$estoque','$tipo','$desc')"; //insere os usuarios através de comando sql
$resul= mysql_query($SQL,$link); //coleta os resultados e  Envia uma consulta MySQL
echo $resul;
echo "<script>window.location.href='listar_usuarios.php'</script>";

?>
</body>
</html>
