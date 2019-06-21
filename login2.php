<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<?PHP

include "conexao.php";

$link=conectar();

$nome=$_POST["nome"];
$senha=$_POST["senha"];

$sql = "SELECT * FROM usuario WHERE nome='$nome' AND senha='$senha'"; 

$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)<=0)
{
	echo"<script> alert ('Usuário $nome não existe e/ou a senha está incorreta!');</script>";
	echo"<script>window.history.back()</script>";
	exit;
}else{
	setcookie("cx_nome",$nome);
	$linhas=mysqli_fetch_array($result);
	$_SESSION["codigo"]=$linhas[0];
	echo"<script> alert ('Bem Vindo $nome!');</script>";
	header("location:listar.php"); //se for usuario(adm) cai em uma pagina, se for usuario2(comum) cai em outra.
}


?>
</body>
</html>