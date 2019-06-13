<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Vendas</title></head>
 <link rel="stylesheet" href="css/style1.css">
<body>

<body class="align">

<div class="site__container">

<div class="grid__container">
<div class="caixa">
<form method="POST" action="insert_vendas.php" name="frm_inserir_venda" class="form form--login" onsubmit="return validaCadProduto(this)">
Cadastro de Vendas
     <div class="form__field">
    <label class="fontawesome-user" for="login__username"><span class="hidden">Codigo do Produto</span></label>
    <input name="cod_prod" id="cod_prod" type="text" class="form__input" size="25" maxlength="50" tabindex="1" placeholder="Cod. do Produto..." required>
    </div>
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Quantidade</span></label>
    <input name="quantidade" id="quantidade" type="text" class="form__input" size="25" maxlength="50" tabindex="2" placeholder="Quantidade" required>
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Data(Modelo:aaaa/mm/dd):</span></label>
    <input name="data" id="data" type="date" class="form__input" size="25" maxlength="50" tabindex="3" placeholder="Data da venda(Modelo:aaaa/mm/dd):" required>
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> C.P.F. do cliente(opcional): </span></label>
    <input name="cpf_cliente" id="cpf_cliente" type="text" class="form__input" size="25" maxlength="30" tabindex="4" placeholder="C.P.F. do cliente(opcional):" >
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> C.N.P.J.: </span></label>
    <input name="cnpj_loja" id="cnpj_loja" type="text" class="form__input" size="25" maxlength="120" tabindex="5" placeholder="C.N.P.J. da Loja..." required>
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