

 <?php require_once "../conexao.php";




$nome=    $_POST["Nome"];
$ingredientes = $_POST["Ingredientes"];
$modopreparo =  $_POST["ModoPreparo"];
$tempopreparo = $_POST["TempoPreparo"];

//String com o comando SQL para ser executado no DB 
$sql =" INSERT INTO `receitas` (`Nome`, `Ingredientes`, `ModoPreparo`, `TempoPreparo`)
         VALUES (?, ?, ?, ?);";
echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parametros
$comando->bind_param("sssd", $nome, $ingredientes, $modopreparo, $tempopreparo);

//executa o SQL - Comando no Banco de dados
$comando->execute();


//abre o arquivo form.php
header("Location: index.php");


