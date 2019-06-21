
<?PHP

include "conexao.php";

$link=conectar();

$cod=$_POST["cod_prod"];
$cod_forn=$_POST["cod_forn"];
$nome=$_POST["nome"];
$estoque=$_POST["quantidade_estoque"];
$tipo_prod=$_POST["tipo_prod"];
$descricao=$_POST["descricao"];

$SQL="UPDATE produtos SET cod_forn='$cod_forn', nome='$nome', quantidade_estoque='$estoque', tipo_prod='$tipo_prod', descricao='$descricao' where cod_prod='$cod'";
$result=mysqli_query($link,$SQL);
echo "<script>window.location.href='listar.php'</script>";

?>