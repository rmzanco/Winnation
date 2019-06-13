<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro</title></head>
 <link rel="stylesheet" href="css/style1.css">
<body>

<body class="align">

<div class="site__container">

<div class="grid__container">
<div class="caixa">
<form method="POST" action="insert_produtos.php" name="frm_inserir_produtos" class="form form--login" onsubmit="return validaCadProduto(this)">
Cadastro de Produtos
     <div class="form__field">
    <label class="fontawesome-user" for="login__username"><span class="hidden">Nome do Produto:</span></label>
    <input name="nome_produto" id="nome_produto" type="text" class="form__input" size="25" maxlength="50" tabindex="1" placeholder="Nome do Produto" required>
    </div>
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Codigo do Fornecedor:</span></label>
    <input name="cod_forn" id="cod_forn" type="text" class="form__input" size="25" maxlength="50" tabindex="2" placeholder="Cod. do Fornecedor(Opcional)" >
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Quantidade de Estoque:</span></label>
    <input name="estoque" id="estoque" type="text" class="form__input" size="25" maxlength="50" tabindex="3" placeholder="Quantid. de Estoque" required>
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Tipo do Produto: </span></label>
    <input name="tipo_prod" id="tipo_prod" type="text" class="form__input" size="25" maxlength="30" tabindex="4" placeholder="Tipo de Produto" required>
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Descrição do Produto: </span></label>
    <input name="desc" id="desc" type="text" class="form__input" size="70" maxlength="120" tabindex="5" placeholder="Descrição do produto" required>
    </div>
    
    
    
    <div align="center" class="form__field">
    <button name="B1" value="cadastro" tabindex="6" type="submit">Confirmar Inserção</button>
    </div>
    </form><!-- fim do formulario -->       
   
</div>
</div>
</div>

</body>
</body>
</html>