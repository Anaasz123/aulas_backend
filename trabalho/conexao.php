<?php

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$passaword = "";
$database = "receitas";

//faz a conexao do PHP com o MySQL
$conexao = new mysqli($host, 
                      $user,
                      $passaword,
                      $database,
                      $port);

//Verifica se houve um erro ao realizar a conexao
if($conexao->connect_error){
    echo "Foi encontrado o erro : " .
                        $conexao->connect_error;

  die();


}