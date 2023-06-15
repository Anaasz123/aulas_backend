<?php require_once "../controla_sessão/controla.php"; ?>

<?php require_once "../conexao.php"; 

if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["ingredientes"])) {

require_once "salvar_foto.php";
 $id = $_POST['id'];
 $nome = $_POST["nome"];
 $login = $_POST["ingredientes"];
 $login = $_POST["ModoPreparo"];
 $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
 $foto = $nome_arquivo;

 //String com o comando SQL para ser executado no DB
 $sql = "UPDATE usuario SET 
`nome`= ?, `login`= ?, `senha`= ?, `foto`= ? 
WHERE `idusuario`= ? ";

//Prepara o SQL para ser executado no banco de dados
 $comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
 $comando->bind_param("ssssi", $id, $nome, $ingredientes, $modopreparo, $tempopreparo);

//executa o SQL - Comando no Banco de Dados
 $comando->execute();
 
}
//abre o arquivo form.php
header("Location: index.php");




