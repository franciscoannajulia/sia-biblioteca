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

       <?php
 
 
 if (isset ($_REQUEST["erro"]))
 {
     echo "<h3>".$_REQUEST ["erro"]."</h3>";
 
 }
 else
 {
     echo"<h3>Não houve erros, volte para página inicial </h3>";	  
 }

?>
   
        <footer>
            <b>@Todos os Direitos Reservados </b>
        </footer>

    </body>
</html>






