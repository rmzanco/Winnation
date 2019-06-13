<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Usuarios</title></head>

<link type="text/css" rel="stylesheet" href="estilos.css"/> <!-- inclui o css -->
<?php

$valor="";
if(isset($_GET['cod_usuario'])) //isset avisa se está vazio ou nao
{$valor=$_GET['cod_usuario']; // cod_aluno valor
include "conexao.php";
$link = conectar();
$SQL= "SELECT * from usuario WHERE cod_usuario='$valor'"; // cod-aluno chave primaria do b.d.
$busca = mysql_query($SQL) or die (mysql_error());
$campo = mysql_fetch_array($busca);
}else{
	$campo['cod_usuario']="";
	$campo['nome']="";
	$campo['senha']="";

}
?>
<body>

	<div id="titulo">
	<h2><center>Editar Usuarios</center></h2>
</div>

<form method="POST"  action="update_usuarios.php" name="frm_inserir_usuarios" onsubmit="return validaCadUsuario(this)"> <!-- formulario para inserção de alunos e envia para a página insert_alunos -->
     <p>Código:
    <input type="text"  name="cod_usuario" value="" size="50" maxlength="100" tabindex="1" placeholder="Insira o codigo do usuario." required></p>
	<p>Nome Completo:
    <input type="text" name="nome" value="<?php echo $campo['nome'];?>" size="50" maxlength="100" tabindex="2"></p>
    <p>Senha:
    <input type="text" name="senha" value="<?php echo $campo['senha'];?>" size="50" maxlength="20" tabindex="3"></p>
    <div align="center">
   <button name="B1" value="button_editar" type="submit" style="width: 84px; height: 30px" tabindex="9">Editar</button>
   
  
    </div>
    </form> <!--fecha o form-->
  

</body>
</html>
