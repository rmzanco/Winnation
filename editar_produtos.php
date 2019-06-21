<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Produtos</title></head>

<link type="text/css" rel="stylesheet" href="estilos.css"/> <!-- inclui o css -->
<?php

$valor="";
if(isset($_GET['cod_prod'])) //isset avisa se está vazio ou nao
{$valor=$_GET['cod_prod']; // cod_aluno valor
include "conexao.php";
$link = conectar();
$SQL= "SELECT * from produtos WHERE cod_prod='$valor'"; // cod-aluno chave primaria do b.d.
$busca = mysqli_query($link,$SQL) or die (mysql_error());
$campo = mysqli_fetch_array($busca);
}else{
	$campo['cod_prod']="";
	$campo['cod_forn']="";
	$campo['nome']="";
	$campo['quantidade_estoque']="";
	$campo['tipo_prod']="";
	$campo['descricao']="";

}
?>
<body>

	<div id="titulo">
	<h2><center>Editar Produtos</center></h2>
</div>

<form method="POST"  action="update_produtos.php" name="frm_alterar_produtos" onsubmit="return validaCadUsuario(this)"> <!-- formulario para inserção de alunos e envia para a página insert_alunos -->
     <p>Código do Produto:
    <input type="text"  name="cod_prod" value="<?php echo $campo['cod_prod'];?>" size="50" maxlength="20" tabindex="1" placeholder="Insira o codigo do usuario." required></p>
	<p>Cod. Fornecedor:
    <input type="text" name="cod_forn" value="<?php echo $campo['cod_forn'];?>" size="50" maxlength="20" tabindex="2"></p>
	<p>Nome Do Produto:
    <input type="text" name="nome" value="<?php echo $campo['nome'];?>" size="50" maxlength="50" tabindex="3"></p>
    <p>Quant. Estoque:
    <input type="text" name="quantidade_estoque" value="<?php echo $campo['quantidade_estoque'];?>" size="50" maxlength="20" tabindex="4"></p>
	<p>Tipo de Produto:
    <input type="text" name="tipo_prod" value="<?php echo $campo['tipo_prod'];?>" size="50" maxlength="30" tabindex="5"></p>
	<p>Descrição:
    <input type="text" name="descricao" value="<?php echo $campo['descricao'];?>" size="50" maxlength="150" tabindex="6"></p>
    <div align="center">
   <button name="B1" value="button_editar" type="submit" style="width: 84px; height: 30px" tabindex="7">Editar</button>
   
  
    </div>
    </form> <!--fecha o form-->
  

</body>
</html>