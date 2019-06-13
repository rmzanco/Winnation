<?PHP

include "conexao.php";

$link=conectar();

$codigo=$_POST["cod_usuario"];
$nome=$_POST["nome"];
$senha=$_POST["senha"];

$cmdSQL="UPDATE usuario SET nome='$nome', senha='$senha' where cod_usuario='$codigo'";
$result=mysql_query($cmdSQL,$link);
echo "<script>window.location.href='listar_usuarios.php'</script>";

?>