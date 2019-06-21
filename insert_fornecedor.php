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

$razao_social=$_POST["razao_social"];
$logradouro=$_POST["logradouro"];
$UF=$_POST["UF"];
$CEP=$_POST["CEP"];
$cnpj_forn=$_POST["cnpj_forn"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];

$SQL="INSERT INTO fornecedor(razao_social,logradouro,UF,CEP,cnpj_forn,telefone,email) VALUES ('$razao_social','$logradouro' ,'$UF','$CEP','$cnpj_forn','$telefone','$email')"; //insere os usuarios através de comando sql
$resul= mysqli_query($link,$SQL); //coleta os resultados e  Envia uma consulta MySQL
echo $resul;
echo "<script>window.location.href='listar.php'</script>";

?>
</body>
</html>
