<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Funções</title>
</head>

<body>
<?PHP

function conectar(){ //cria a função conectar, para identificar as informações que serão pesquisadas no banco
	$caminho="localhost"; //cria a vairavel caminho. localhost é onde que está localizado o endereço do banco
	$nome="root"; //cria a variável nome. root significa como é definido os arquivos de configuração do servidor.
	$senha=""; //cria a variável senha.
	$nomebanco="projeto_basquete"; //cria a variável nomebanco. escola é o nome do banco que se encontra no servidor phpMyAdmin

	/*

	if($conect=mysql_connect($caminho,$nome,$senha)){ // Abre uma conexão com um servidor MySQL
		mysql_select_db($nomebanco) or die ("Erro ao selecionar o Banco de Dados. Arrume o conexão.php ou o PHPMyAdmin."); //seleciona o banco para uso, caso nao tenha B.D. mandar mensagem.
		mysql_query("SET names 'utf8'"); //Envia uma consulta MySQL. Define que os nomes estão em utf8.
		mysql_query("SET character_set_connection='utf8'"); //Envia uma consulta MySQL. Conexão em utf8.
		mysql_query("SET character_set_cliente='utf8'"); //Envia uma consulta MySQL. Servidor em utf8
		mysql_query("SET character_set_results='utf8'"); ////Envia uma consulta MySQL. Pegar resultados em utf8.
		return $conect; //a função return devolve o controle do programa para a função php. o $conect retorna para o php.
	}else{
		return 0; //se não achar nada, devolve um conjunto vazio.
	}

	*/

	if($conect=mysqli_connect($caminho,$nome,$senha,$nomebanco)){
			mysqli_query($conect,"SET names 'utf8'");
			mysqli_query($conect,"SET character_set_connection='utf8'");
			mysqli_query($conect,"SET character_set_cliente='utf8'");
			mysqli_query($conect,"SET character_set_results='utf8'");
			return $conect;
	}else{
		die ("Erro no db ".$nomebanco);
		return 0;
	}

}
?>
</body>
</html>