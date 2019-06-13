<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro</title></head>
 <link rel="stylesheet" href="css/style1.css">
<body>
<center><font face="Segoe UI" size="8"> Bem Vindo(a)! Cadastre-se em nosso site! </font></center>
<body class="align">

<div class="site__container">

<div class="grid__container">
<div class="caixa">
<form method="POST" action="insert_usuarios.php" name="frm_inserir_usuarios" class="form form--login" onsubmit="return validaCadUsuario(this)">
	 <div class="form__field">
    <label class="fontawesome-user" for="login__username"><span class="hidden">Nome de Usuário:</span></label>
    <input name="nome" id="login__username" type="text" class="form__input" size="25" maxlength="20" tabindex="1" placeholder="Seu Nickname" required>
    </div>
    <div class="form__field">
    <label class="fontawesome-lock" for="login__password"><span class="hidden">Senha:</span></label>
    <input name="senha" id="login__password" type="password" class="form__input" size="25" maxlength="50" tabindex="2" placeholder="Sua senha" required>
    </div> 
    
    <div align="center" class="form__field">
    <button name="B1" value="cadastro" tabindex="3" type="submit">Confirmar</button>
    </div>
    </form><!-- fim do formulario -->       
   
</div>
</div>
</div>

</body>
</body>
</html>