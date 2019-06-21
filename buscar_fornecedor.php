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
	<td style="background-color:#C30">Cod.Fornecedor</td>
	<td style="background-color:#C30">Razão Social</td>
	<td style="background-color:#C30">logradouro</td>
	<td style="background-color:#C30">Unid. Federativa</td>
	<td style="background-color:#C30">C.E.P.</td>
    <td style="background-color:#C30">C.N.P.J.</td>
	<td style="background-color:#C30">Telefone</td>
	<td style="background-color:#C30">E-mail</td>
</tr>
<?PHP
include ("conexao.php");
$link=conectar();
$var=$_POST['cx_busca_forn'];
$SQL="SELECT * FROM fornecedor WHERE razao_social like '%".$var."%' ";
$resul=mysqli_query($link,$SQL);
while ($busca=mysqli_fetch_array($resul)){
	echo "<tr><td>".$busca['cod_forn']    ."</td>";
	echo "<td>"    .$busca['razao_social']."</td>";
	echo "<td>"    .$busca['logradouro']  ."</td>";
	echo "<td>"    .$busca['UF']          ."</td>";
	echo "<td>"    .$busca['CEP']         ."</td>";
	echo "<td>"	   .$busca['cnpj_forn']   ."</td>";
	echo "<td>"    .$busca['telefone']    ."</td>";
	echo "<td>"    .$busca['email']       ."</td>";
	echo "</tr>";
}
?>
</table>

<a href="listar.php">
<button name="voltar" value="button_sair" type="submit" style="width:84px; height: 30px; background-color: #C30" tabindex="10">Retornar</button>
</a></center>
   
    </body>
    </html>
    