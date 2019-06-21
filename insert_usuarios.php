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

$nome=$_POST["nome"];
$senha=$_POST["senha"];

$SQL="INSERT INTO usuario (nome,senha) VALUES ('$nome','$senha')"; //insere os usuarios através de comando sql
$resul= mysqli_query($link,$SQL); //coleta os resultados e  Envia uma consulta MySQL
echo $resul;

setcookie("cx_nome",$nome);

echo "<script>window.location.href='listar.php'</script>";

?>
</body>
</html>
