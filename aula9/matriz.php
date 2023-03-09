<h2>Matriz</h2>

<?php

$produto1 = [
    "nome" => "Notebook",
    "marca" => "Dell",
    "preco" => 5000
];

$produto2 =[
    "nome" => "camera",
    "marca" => "Nilkon",
    "preco" => 300

];

$produto3 =[
    "nome" => "Smartphone",
    "marca" => "LG",
    "preco" => 1200

];

$tabela = [
    $produto1,
    $produto2,
    $produto3

];

var_dump($tabela);
echo $tabela[1]["marca"];

//json - Javascript Object Notation 
echo "<br><br><br><br>";
echo json_encode($tabela);