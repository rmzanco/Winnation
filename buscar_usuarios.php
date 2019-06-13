<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar Usuarios</title></head>
<script language="javascript" src="funcoes.js"></script>
<link type="text/css" rel="stylesheet" href="estilos.css"/>
<body>

<?php

echo "<center><font face=\"Segoe UI\" size=\"4\">Pesquisa de Usuários</font></center>";

?>
<center>
<table border="1" width="900" style="font-family:Segoe UI">
<tr>
	<td style="background-color:#C30">Codigo</td>
	<td style="background-color:#C30">Nome</td>
</tr>
<?PHP
include ("conexao.php");
$link=conectar();
$var=$_POST['cx_busca'];
$consul="SELECT * FROM usuario WHERE nome like '%".$var."%' ";
$resul=mysql_query($consul,$link);
while ($busca=mysql_fetch_array($resul)){
	echo "<tr><td>".$busca['cod_usuario']."</td>";
	echo "<td>".$busca['nome']."</td>";
	echo "<tr>";
}
?>
</table>

<a href="listar_usuarios.php">
<button name="voltar" value="button_sair" type="submit" style="width:84px; height: 30px; background-color: #C30" tabindex="10">Retornar</button>
</a</center>
   
    </body>
    </html>
    