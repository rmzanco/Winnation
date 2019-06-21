<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar Vendas</title></head>
<script language="javascript" src="funcoes.js"></script>
<link type="text/css" rel="stylesheet" href="estilos.css"/>
<body>

<?php

echo "<center><font face=\"Segoe UI\" size=\"4\">Pesquisa de Vendas</font></center>";

?>
<br>eai meu<br>
<center>
<table border="1" width="900" style="font-family:Segoe UI">
<tr>
	<td style="background-color:#C30">Cod. Venda</td>
    <td style="background-color:#C30">Cod. Produto</td>
	<td style="background-color:#C30">quantidade</td>
    <td style="background-color:#C30">Data da venda</td>
    <td style="background-color:#C30">C.P.F. do cliente(opcional)</td>
    <td style="background-color:#C30">C.N.P.J.</td>
</tr>
<?PHP
include ("conexao.php");
$link=conectar();
$var=$_POST['cx_busca_venda'];
$SQL="SELECT * FROM vendas WHERE cod_venda like '%".$var."%' ";
$resul=mysql_query($link,$SQL);
while ($busca=mysqli_fetch_array($resul)){
	echo "<tr><td>".$busca['cod_venda']."</td>";
	echo "<td>".$busca['cod_prod']."</td>";
	echo "<td>".$busca['quantidade']."</td>";
	echo "<td>".$busca['data']."</td>";
	echo "<td>".$busca['cpf_cliente']."</td>";
	echo "<td>".$busca['cnpj_loja']."</td>";
	echo "</tr>";
}
?>
</table>

<a href="listar.php">
<button name="voltar" value="button_sair" type="submit" style="width:84px; height: 30px; background-color: #C30" tabindex="10">Retornar</button>
</a></center>
   
    </body>
    </html>
    