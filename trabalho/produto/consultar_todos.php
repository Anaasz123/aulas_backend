<?php

require_once "../conexao.php";


//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM receitas ; ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();
//cria um vetor vazio
$receitas = [];

//pegar todas as linhas do resultado
while ($receita = $resultado->fetch_assoc()) {

   $receitas[] = $receita;

}




