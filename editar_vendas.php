<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Produtos</title></head>

<link type="text/css" rel="stylesheet" href="estilos.css"/> <!-- inclui o css -->
<?php

$valor="";
if(isset($_GET['cod_venda'])) //isset avisa se está vazio ou nao
{$valor=$_GET['cod_venda']; // cod_aluno valor
include "conexao.php";
$link = conectar();
$SQL= "SELECT * from vendas WHERE cod_venda='$valor'"; 
$busca = mysql_query($SQL) or die (mysql_error());
$campo = mysql_fetch_array($busca);
}else{
	$campo['cod_venda']="";
	$campo['cod_prod']="";
	$campo['quantidade']="";
	$campo['data']="";
	$campo['cpf_cliente']="";
	$campo['cnpj_loja']="";

}
?>
<body>

	<div id="titulo">
	<h2><center>Modificar Vendas Efetuadas</center></h2>
</div>

<form method="POST"  action="update_vendas.php" name="frm_alterar_vendas" onsubmit="return validaCadUsuario(this)"> <!-- formulario para inserção de alunos e envia para a página insert_alunos -->
     <p>Código da Venda:
    <input type="text"  name="cod_venda" value="<?php echo $campo['cod_venda'];?>" size="50" maxlength="20" tabindex="1" required></p>
	<p>Cod. Produto:
    <input type="text" name="cod_prod" value="<?php echo $campo['cod_prod'];?>" size="50" maxlength="20" tabindex="2"></p>
	<p>Quantidade:
    <input type="text" name="quantidade" value="<?php echo $campo['quantidade'];?>" size="50" maxlength="50" tabindex="3"></p>
    <p>Data da venda
    <input type="date" name="data" value="<?php echo $campo['data'];?>" size="50" maxlength="20" tabindex="4"></p>
	<p>CPF do Cliente:
    <input type="text" name="cpf_cliente" value="<?php echo $campo['cpf_cliente'];?>" size="50" maxlength="30" tabindex="5"></p>
	<p>CNPJ da Loja:
    <input type="text" name="cnpj_loja" value="<?php echo $campo['cnpj_loja'];?>" size="50" maxlength="150" tabindex="6"></p>
    <div align="center">
   <button name="B1" value="button_editar" type="submit" style="width: 84px; height: 30px" tabindex="7">Modificar</button>
   
  
    </div>
    </form> <!--fecha o form-->
  

</body>
</html>