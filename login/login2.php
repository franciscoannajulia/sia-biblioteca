<?php
include "../conexao.php"; 
 
 $txUsuario = $_REQUEST["txUsuario"];
 $txSenha = $_REQUEST["txSenha"];
 
 $sql = "select * from funcionario where login= :txUsuario and senha= :txSenha";

 $result = $conexao->prepare($sql);
 $result ->bindValue(":txUsuario", $txUsuario);
 $result ->bindValue(":txSenha", $txSenha);
 $result ->execute();
 
 $qtde = $result->rowCount();
 
 if ($qtde ==1)
 {
	 session_start();
     $linha = $result->fetch(PDO::FETCH_ASSOC);
	 $_SESSION["CodFuncionario"] = $linha ["CodFuncionario"];
	 $_SESSION["Nome"] = $linha ["Nome"];
     $_SESSION["Login"] = $linha ["Login"];
     $_SESSION["Senha"] = $linha ["Senha"];

	 header("location: ../consultalivros.php");

 }
 else
 {
	 echo "<script>
    alert('Dados invalidos');
    window.location.href='../index.php';
    </script>";
	 

 }