
<?php require_once "../conexao.php"; 




 $id = $_POST['ID'];
 $nome = $_POST["Nome"];
 $ingredientes = $_POST["Ingredientes"];
 $modopreparo = $_POST["ModoPreparo"];
 $tempopreparo = $_POST["TempoPreparo"];


 //String com o comando SQL para ser executado no DB
 $sql = "UPDATE receitas SET 
`Nome`= ?, `Ingredientes`= ?, `ModoPreparo`= ?, `TempoPreparo`= ? 
WHERE `ID`= ? ";

//Prepara o SQL para ser executado no banco de dados
 $comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
 $comando->bind_param("sssdi", $nome, $ingredientes, $modopreparo, $tempopreparo, $id);

//executa o SQL - Comando no Banco de Dados
 $comando->execute();
 

//abre o arquivo form.php
header("Location: index.php");




