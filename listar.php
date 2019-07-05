
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Pagina do usuário</title>
	</head>

	<script language="javascript" src="funcoes.js">
		//digitar javascript aqui ou no funcoes.js
	</script>

	<link type="text/css" rel="stylesheet" href="estilos.css"/>

	<body>

		<div class="intro">
			<?PHP

				include ("conexao.php"); 

				function tratar_nome ($nome) {
					$saida = null;
					$nome = strtolower($nome); // Converter o nome todo para minúsculo
					$nome = explode(" ", $nome); // Separa o nome por espaços
					for ($i=0; $i < count($nome); $i++) {

						// Tratar cada palavra do nome
						if (
							$nome[$i] == "de"
						or  $nome[$i] == "da"
						or  $nome[$i] == "e"  
						or  $nome[$i] == "dos" 
						or  $nome[$i] == "do"
						or  $nome[$i] == "di"
							) 
						{
							$saida .= $nome[$i].' '; // Se a palavra estiver dentro das complementares mostrar toda em minúsculo
						} else {
							$saida .= ucfirst($nome[$i]).' '; // Se for um nome, mostrar a primeira letra maiúscula
						}

					}
					return $saida;
				}

				$cookie=$_COOKIE["cx_nome"]; //passa o login através de um cookie
				$cookie = tratar_nome($cookie); //chama a func tratar nome
				echo "Bem Vindo $cookie!<br>"; 
				echo "<br><font face=\"Segoe UI\" size=\"5\">Lista de Usuários</font>";

			?>
		</div>

		<div class="corpitcho">
			<table
				width="900"
				> <!--Passar style p/ css!-->

				<tr>
					<td style="background-color:#C30">Modificar</td>
					<td style="background-color:#C30">Codigo</td>
					<td style="background-color:#C30">Nome</td>
				</tr>

				<?PHP

					$link=conectar(); 
					$consul="SELECT * FROM usuario";
					$resul=mysqli_query($link,$consul); 
					while ($busca=mysqli_fetch_array($resul)){ 
						echo 
							"<tr>
								<td>
									<a href='delete_usuarios.php?cod_usuario="
									.$busca['cod_usuario']."'target='Deletar o Usuário'>
										<img src='images/b_excluir.png'>
									</a>
									<a href='editar_usuarios.php?cod_usuario="
									.$busca['cod_usuario']."'target='Alterar o Usuário'>
										<img src='images/b_editar.png'>
									</a>
								</td>
								<td>".$busca['cod_usuario']."</td>
								<td>".$busca['nome']."</td> 
							</tr>";
					}

				?>

			</table>
			<br>

			Pesquisar usuário:
			<form method="post" action="buscar_usuarios.php" name="form_listar" >
				<p>
					<input 
						type="text"
						name="cx_busca"
						size="50"
						maxlength="100"
						tabindex="1"
						style="background-color:#999999"
						placeholder="Insira o nome do usuário...">
				</p>
				<button 
					name="B1"
					value="button_buscar"
					type="submit"
					style="width: 84px; height: 30px; background-color: #C30; font-face:Open Sans MS"
					tabindex="9"> Confirmar
				</button>
			</form>
			<BR>

			<div style="background-color:rgb(212, 19, 19)">

				<?php
				echo "<br><font face=\"Segoe UI\" size=\"5\">Lista de Produtos</font>";
				?>

				<br>
				<table
					width="900"
					style="
						background-image: url(cesto-basquetebol.jpg);
						color:#FFFFFF;
						font:12px/15px 'Open Sans MS', sans-serif;
						border-color:#F30">

					<tr>
						<td style="background-color:#C30">Modificar</td>
						<td style="background-color:#C30">Cod. Do Produto</td>
						<td style="background-color:#C30">Cod. Do Fornecedor</td>
						<td style="background-color:#C30">Nome</td>
						<td style="background-color:#C30">Quantd. Estoque</td>
						<td style="background-color:#C30">Tipo Do Produto</td>
						<td style="background-color:#C30">Descrição</td>
					</tr>
					<?PHP

						$link=conectar(); 
						$consul="SELECT * FROM produtos"; 
						$resul=mysqli_query($link,$consul); 
						while ($busca=mysqli_fetch_array($resul)){ 
							echo
								"<tr>
										<td>
											<a href='delete_produtos.php?cod_prod="
											.$busca['cod_prod']."'target='Deletar o Produto'>
												<img src='images/b_excluir.png'>
											</a>
											<a href='editar_produtos.php?cod_prod="
											.$busca['cod_prod']."'target='Alterar o Produto'>
												<img src='images/b_editar.png'>
											</a>
										</td>";
									echo "<td>".$busca['cod_prod']."</td>"; //imprime na tela o codigo
									echo "<td>".$busca['cod_forn']."</td>";
									echo "<td>".$busca['nome']."</td>"; //imprime na tela o nome
									echo "<td>".$busca['quantidade_estoque']."</td>";
									echo "<td>".$busca['tipo_prod']."</td>";
									echo "<td>".$busca['descricao']."</td>";
							echo "<tr>";
						}

					?>
				</table>
				<br>
				<button
					name="b3"
					onclick="window.location.href='inserir_produtos.php'"
					action="inserir_produtos.php"
					value="button_inserir_prod"
					type="submit"
					style="width:150px; height: 30px; background-color: #C30"
					tabindex="10"> Cadastrar Produtos
				</button>
				<br />
				<br>

				Pesquisar Produto:
				<form method="post" action="buscar_produtos.php" name="form_pesq_prod"> 
					<p> <input type="text" name="cx_busca_prod" size="50" maxlength="100" tabindex="8" style="background-color:#999999" placeholder="Insira o nome do produto..."></p>
					<button
						name="Bprod"
						value="button_buscar_prod"
						type="submit"
						style="width: 84px; height: 30px; background-color: #C30;"
						tabindex="9" > Confirmar
					</button>
				</form>
				<br>
			</div>

			<?php
			echo "<br><font face=\"Segoe UI\" size=\"5\">Lista de Vendas</font>";
			?>

			<br>
			<table
			width="900"
			style="background-image: url(cesto-basquetebol.jpg);
				   color:#FFFFFF;
				   font:12px/15px 'Open Sans MS', sans-serif;
				   border-color:#F30">

				<tr>
				<td style="background-color:#C30">Modificar</td>
				<td style="background-color:#C30">Cod. Venda</td>
				<td style="background-color:#C30">Cod. Produto</td>
				<td style="background-color:#C30">quantidade</td>
				<td style="background-color:#C30">Data da venda</td>
				<td style="background-color:#C30">C.P.F. do cliente(opcional)</td>
				<td style="background-color:#C30">C.N.P.J.</td>
					
				<?PHP

					$link=conectar(); 
					$consul="SELECT * FROM vendas"; 
					$resul=mysqli_query($link,$consul); 
					while ($busca=mysqli_fetch_array($resul)){ 
						echo "
							<tr>
								<td>
										<a href='delete_vendas.php?cod_venda="
										.$busca['cod_venda']."'target='Deletar a Venda'>
											<img src='images/b_excluir.png'>
										</a>
										<a href='editar_vendas.php?cod_venda="
										.$busca['cod_venda']."'target='Alterar dados da venda'>
											<img src='images/b_editar.png'>
										</a>
								</td>";
						echo "<td>".$busca['cod_venda']."</td>"; //imprime na tela o codigo
						echo "<td>".$busca['cod_prod']."</td>"; //imprime na tela o nome
						echo "<td>".$busca['quantidade']."</td>";
						echo "<td>".$busca['data']."</td>";
						echo "<td>".$busca['cpf_cliente']."</td>";
						echo "<td>".$busca['cnpj_loja']."</td>";
						echo "<tr>";
					}
				?>
			</table>
			<br>
			<button name="bvenda"
					onclick="window.location.href='inserir_venda.php'"
					action="inserir_venda.php"
					value="button_inserir_venda"
					type="submit"
					style="width:150px;
						height: 30px; 
						background-color: #C30;"
					tabindex="10">
				Efetivar uma venda
			</button>

			<br>
			<br>

			Pesquisar uma venda:
			<form method="post" action="buscar_venda.php" name="form_pesq_venda"> 
				<p>
					<input
						type="text"
						name="cx_busca_venda"
						size="50"
						maxlength="100"
						tabindex="8"
						style="background-color:#999999"
						placeholder="Insira o codigo da venda...">
				</p>
				<button name="Bvenda2"
						value="button_buscar_venda"
						type="submit"
						style="width: 84px;
							height: 30px;
							background-color: #C30;"
						tabindex="9"> Pesquisar
				</button>
			</form>

			<?php
				echo "<br><font face=\"Segoe UI\" size=\"5\">Lista de Fornecedores</font>";
			?>

			<br>
			<table
				width="900"
				style="background-image: url(cesto-basquetebol.jpg);
					   color:#FFFFFF; 
					   font:12px/15px 'Open Sans MS', sans-serif;
					   border-color:#F30">

				<tr>
					<td style="background-color:#C30">Modificar</td>
					<td style="background-color:#C30">Cod. Do Fornecedor</td>
					<td style="background-color:#C30">Razão Social(Nome)</td>
					<td style="background-color:#C30">Logradouro</td>
					<td style="background-color:#C30">Unid. Federativa(Estado)</td>
					<td style="background-color:#C30">C.E.P.</td>
					<td style="background-color:#C30">C.N.P.J.</td>
					<td style="background-color:#C30">Telefone</td>
					<td style="background-color:#C30">E-mail</td>
				</tr>

				<?PHP

					$link=conectar(); 
					$consul="SELECT * FROM fornecedor"; 
					$resul=mysqli_query($link,$consul);
					
					while ($busca=mysqli_fetch_array($resul)){ 
						echo "<tr>
								<td>
									<a href='delete_fornecedor.php?cod_forn="
									.$busca['cod_forn']."'target='Deletar o Fornecedor'>
										<img src='images/b_excluir.png'>
									</a>
									<a href='editar_forn.php?cod_forn="
									.$busca['cod_forn']."'target='Alterar o Fornecedor'>
										<img src='images/b_editar.png'>
									</a>
								</td>";
							echo "<td>".$busca['cod_forn']."</td>";
							echo "<td>".$busca['razao_social']."</td>";
							echo "<td>".$busca['logradouro']."</td>";
							echo "<td>".$busca['UF']."</td>";
							echo "<td>".$busca['CEP']."</td>";
							echo "<td>".$busca['cnpj_forn']."</td>";
							echo "<td>".$busca['telefone']."</td>";
							echo "<td>".$busca['email']."</td>";
						echo "<tr>";
					}

				?>

			</table>
			<br>

			<button 
				name="bforn"
				onclick="window.location.href='inserir_fornecedor.php'"
				action="inserir_fornecedor.php"
				value="button_inserir_forn"
				type="submit"
				style="width:150px; height: 30px; background-color: #C30"
				tabindex="10"> Cadastar Fornecedor
			</button>

			<br>
			<br>

			Pesquisar Fornecedor:
			<form method="post" action="buscar_fornecedor.php" name="form_pesq_forn"> 
				<p>
					<input
						type="text"
						name="cx_busca_forn"
						size="50"
						maxlength="100"
						tabindex="8"
						style="background-color:#999999"
						placeholder="Insira o nome do Fornecedor...">
				</p>
				<button
					name="Bforn2"
					value="button_buscar_forn"
					type="submit"
					style="width: 84px; height: 30px; background-color: #C30;"
					tabindex="9" > Confirmar
				</button>
			</form>

		</div>

		<!----------------------------LOGOUT----------------------------------------------------->
		<br>
		<hr>
		
		<div class="logout">
			<img
				src="images/logo.png" 
				width="350"
				height="125"
				alt="winnation">
			<br>
			<br>
			<button 
				name="b2"
				onclick="window.location.href='index.html'"
				action="index.html"
				value="button_sair"
				type="submit"
				style="width:84px; height: 30px; background-color: #C30"
				tabindex="10"> Sair
			</button>
			<br><br>
			Copyrights by Rodrigo M. Zanco
			<br>
		</div>
	</body>
</html>
    