
<?PHP

include "conexao.php";

$link=conectar();

$cod_forn=$_POST["cod_forn"];
$razao_social=$_POST["razao_social"];
$log=$_POST["logradouro"];
$UF=$_POST["UF"];
$cep=$_POST["CEP"];
$cnpj_forn=$_POST["cnpj_forn"];
$tel=$_POST["telefone"];
$email=$_POST["email"];

$SQL="UPDATE fornecedor SET  razao_social='$razao_social', logradouro='$log', UF='$UF', CEP='$cep',cnpj_forn='$cnpj_forn',telefone='$tel',email='$email' where cod_forn='$cod_forn'";
$result=mysqli_query($link,$SQL);
echo "<script>window.location.href='listar.php'</script>";

?>