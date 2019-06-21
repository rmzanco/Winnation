<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar Produtos</title></head>
<script language="javascript" src="funcoes.js"></script>
<link type="text/css" rel="stylesheet" href="estilos.css"/>
<body>

<?php

echo "<center><font face=\"Segoe UI\" size=\"4\">Pesquisa de Produtos</font></center>";

?>
<center>
<table border="1" width="900" style="font-family:Segoe UI">
<tr>
	<td style="background-color:#C30">Cod.Produto</td>
	<td style="background-color:#C30">Cod. Fornecedor</td>
	<td style="background-color:#C30">Nome do Produto</td>
	<td style="background-color:#C30">Quantd. estoque</td>
	<td style="background-color:#C30">Tipo de Produto</td>
	<td style="background-color:#C30">Descrição</td>
</tr>
<?PHP
include ("conexao.php");
$link=conectar();
$var=$_POST['cx_busca_prod'];
$SQL="SELECT * FROM produtos WHERE nome like '%".$var."%' ";
$resul=mysqli_query($link,$SQL);
while ($busca=mysqli_fetch_array($resul)){
	echo "<tr><td>".$busca['cod_prod']."</td>";
	echo "<td>".$busca['cod_forn']."</td>";
	echo "<td>".$busca['nome']."</td>";
	echo "<td>".$busca['quantidade_estoque']."</td>";
	echo "<td>".$busca['tipo_prod']."</td>";
	echo "<td>".$busca['descricao']."</td>";
	echo "</tr>";
}
?>
</table>

<a href="listar.php">
<button name="voltar" value="button_sair" type="submit" style="width:84px; height: 30px; background-color: #C30" tabindex="10">Retornar</button>
</a></center>
   
    </body>
    </html>
    