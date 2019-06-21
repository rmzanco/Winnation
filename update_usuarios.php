<?PHP

include "conexao.php";

$link=conectar();

$codigo=$_POST["cod_usuario"];
$nome=$_POST["nome"];
$senha=$_POST["senha"];

$SQL="UPDATE usuario SET nome='$nome', senha='$senha' where cod_usuario='$codigo'";
$result=mysqli_query($link,$SQL);
echo "<script>window.location.href='listar.php'</script>";

include "listar.php";

?>