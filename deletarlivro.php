<?php

include "conexao.php";

$CodigoLivro = $_REQUEST["codigo"];

$sql = "delete from livrodidatico WHERE CodLivroDidatico = :CodigoLivro";
$result = $conexao->prepare($sql);			
$result->bindValue(":CodigoLivro", $CodigoLivro);		
$result->execute();

header("Location: consultalivros.php"); 


?>