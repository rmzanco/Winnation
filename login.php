<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style1.css">

    
    
    
  </head>

  <body>

    <body class="align">

  <div class="site__container">

    <div class="grid__container">

      <form action="login2.php"  method="post" class="form form--login"> <!--login.php do projeto-->

        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Nome de Usuário:</span></label>
          <input id="login__username" type="text" class="form__input" placeholder="Username" Obrigatório>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Senha:</span></label>
          <input id="login__password" type="password" class="form__input" placeholder="Password" Obrigatório>
        </div>

        <div class="form__field">
          <input type="submit" value="Entrar">
        </div>

      </form>

      <p class="text--center">Não tem uma conta?<a href="inserir_usuarios.php"> Cadastre-se! </a> <span class="fontawesome-arrow-right"></span></p> 

    </div>

  </div>

</body>
    
    
    
    
    
  </body>
</html>
