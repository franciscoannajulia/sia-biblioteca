<!DOCTYPE html>
<html lang="br">

    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link href="login/css/login.css"  rel="stylesheet"  type="text/css">
    </head>

    <body background="img/floresta.jpg" id="img-back">

        <form action="login/login2.php" method="POST">
            <div class="imgcontainer">
                <image src="login/img/user.png" alt="avatar" class="avatar" > </i> 
            </div>
          
            <div class="container">
                <label for="txUsuario" class="labels"><b>Usuário</b> <br>
                    <input type="text" id="txUsuario" placeholder="Insira usuário" name="txUsuario" required maxlength="25">
                </label>
              
                <p>

                <label for="txSenha" class="labels"><b>Senha</b></label> <br>
                    <input type="password" id="txSenha" placeholder="Insira senha" name="txSenha" required> <br>
                </label>

                <p>

                <label>
                    <input type="checkbox" checked="checked" class="labels" name="remember"> Mantenha-me conectado
                </label> <p>

              <button type="submit" value="Entrar">Entrar</button>
             
            </div>
        </form>
   
        <footer>
            <b>@Todos os Direitos Reservados </b>
        </footer>

    </body>
</html>






