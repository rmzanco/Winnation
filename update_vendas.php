
<?PHP

include "conexao.php";

$link=conectar();

$cod_venda=$_POST["cod_venda"];
$cod_prod=$_POST["cod_prod"];
$quantidade=$_POST["quantidade"];
$data=$_POST["data"];
$cpf_cliente=$_POST["cpf_cliente"];
$cnpj_loja=$_POST["cnpj_loja"];

$cmdSQL="UPDATE vendas SET cod_prod='$cod_prod', quantidade='$quantidade', data='$data', cpf_cliente='$cpf_cliente',cnpj_loja='$cnpj_loja' where cod_venda='$cod_venda'";
$result=mysql_query($cmdSQL,$link);
echo "<script>window.location.href='listar_usuarios.php'</script>";

?>