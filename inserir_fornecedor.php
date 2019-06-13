<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Fornecedor</title></head>
 <link rel="stylesheet" href="css/style1.css">
<body>

<body class="align">

<div class="site__container">

<div class="grid__container">
<div class="caixa">
<form method="POST" action="insert_fornecedor.php" name="frm_inserir_forn" class="form form--login" onsubmit="return validaCadProduto(this)">
	Inserção de Fornecedor 
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Razão Social:</span></label>
    <input name="razao_social" id="razao_social" type="text" class="form__input" size="25" maxlength="50" tabindex="2" placeholder="Razão Social:" required>
    </div> 
	
	    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Logradouro:</span></label>
    <input name="logradouro" id="logradouro" type="text" class="form__input" size="25" maxlength="50" tabindex="2" placeholder="Logradouro:" required>
    </div> 
	
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> U.F.</span></label>
    <input name="UF" id="UF" type="text" class="form__input" size="25" maxlength="50" tabindex="3" placeholder="Unid. Federativa:" required>
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> C.E.P. </span></label>
    <input name="CEP" id="CEP" type="text" class="form__input" size="25" maxlength="30" tabindex="4" placeholder="C.E.P.:" required>
    </div> 
    
    <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> CNPJ do Fornecedor: </span></label>
    <input name="cnpj_forn" id="cnpj_forn" type="text" class="form__input" size="25" maxlength="120" tabindex="5" placeholder="CNPJ do Fornecedor:" required>
    </div>
    
   <div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> Telefone: </span></label>
    <input name="telefone" id="telefone" type="text" class="form__input" size="25" maxlength="120" tabindex="6" placeholder="Telefone:" required>
    </div> 
	
	<div class="form__field">
    <label class="fontawesome-lock" for="login__username"><span class="hidden"> email: </span></label>
    <input name="email" id="email" type="text" class="form__input" size="25" maxlength="120" tabindex="7" placeholder="E-Mail:" required>
    </div>
    
    <div align="center" class="form__field">
    <button name="B1" value="cadastro" tabindex="8" type="submit">Confirmar Inserção</button>
    </div>
    </form><!-- fim do formulario -->       
   
</div>
</div>
</div>

</body>
</body>
</html>