<?php

require_once "../conexao.php";

//verifica se foi enviado o param id pela URL
if(isset($_GET['ID']))
{

//pega o valor do id que foi enviada pela URL
$id = $_GET['ID'];

//String com o comando SQL para ser executado no DB 
$sql =" SELECT * FROM `receitas` WHERE  `ID`= ?;";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parametros
$comando->bind_param("i", $id);

//executa o SQL - Comando no Banco de dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$receitas = $resultado->fetch_assoc();


}






