<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Cadastro de Fornecedores</title></head>

<link type="text/css" rel="stylesheet" href="estilos.css"/> <!-- inclui o css -->
<?php

$valor="";
if(isset($_GET['cod_forn'])) //isset avisa se está vazio ou nao
{$valor=$_GET['cod_forn']; // cod_aluno valor
include "conexao.php";
$link = conectar();
$SQL= "SELECT * from fornecedor WHERE cod_forn='$valor'"; // cod-aluno chave primaria do b.d.
$busca = mysqli_query($link,$SQL) or die (mysql_error());
$campo = mysqli_fetch_array($busca);
}else{
	$campo['cod_forn']="";
	$campo['razao_social']="";
	$campo['logradouro']="";
	$campo['UF']="";
	$campo['CEP']="";
	$campo['cnpj_forn']="";
	$campo['telefone']="";
	$campo['email']="";

}
?>
<body>

	<div id="titulo">
	<h2><center>Editar Cadastro dos Fornecedores</center></h2>
</div>

<form method="POST"  action="update_forn.php" name="frm_alterar_forn" onsubmit="return validaCadUsuario(this)">
     <p>Código do Fornecedor:
    <input type="text"  name="cod_forn" value="<?php echo $campo['cod_forn'];?>" size="50" maxlength="20" tabindex="1" placeholder="Insira o codigo do fornecedor..." required></p>
	<p>Razão Social:
    <input type="text" name="razao_social" value="<?php echo $campo['razao_social'];?>" size="50" maxlength="50" tabindex="2"></p>
    <p>Logradouro:
    <input type="text" name="logradouro" value="<?php echo $campo['logradouro'];?>" size="50" maxlength="120" tabindex="3"></p>
	<p>Unid. Federativa(Estado):
    <input type="text" name="UF" value="<?php echo $campo['UF'];?>" size="50" maxlength="30" tabindex="4"></p>
	<p>C.E.P.:
    <input type="text" name="CEP" value="<?php echo $campo['CEP'];?>" size="50" maxlength="150" tabindex="5"></p>
    <p>C.N.P.J.:
    <input type="text" name="cnpj_forn" value="<?php echo $campo['cnpj_forn'];?>" size="50" maxlength="20" tabindex="6"></p>
    <p>Telefone:
    <input type="text" name="telefone" value="<?php echo $campo['telefone'];?>" size="50" maxlength="20" tabindex="7"></p>
    <p>E-Mail:
    <input type="text" name="email" value="<?php echo $campo['email'];?>" size="50" maxlength="150" tabindex="8"></p>
    <div align="center">
   <button name="B1" value="button_editar" type="submit" style="width: 84px; height: 30px" tabindex="9">Editar</button>
   
    </div>
    </form> <!--fecha o form-->
  

</body>
</html>