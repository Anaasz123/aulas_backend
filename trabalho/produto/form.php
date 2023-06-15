
<?php require_once "consultar_por_id.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <hr>

  

  <form 
   action="<?php echo isset($receitas) ? 'atualizar.php' : 'inserir.php' ?>"
   method="post"
   enctype="multipart/form-data"
   >

    <label for="Nome">Nome</label><br>
    <input type="text" name="Nome" id="Nome" value="<?php echo $receitas['Nome']?? "";?>"><br>

    <input type="hidden" name="ID" id="ID" value="<?php echo $receitas['ID']?? "";?>"><br>


    <label for="Ingredientes">Ingredientes</label><br>
    <textarea name="Ingredientes" id="Ingredientes"><?php echo $receitas['Ingredientes']?? "";?></textarea><br>

    <label for="ModoPreparo">Modo de Preparo</label><br>
    <textarea name="ModoPreparo" id="ModoPreparo"><?php echo $receitas['ModoPreparo']?? "";?></textarea><br>

    <label for="TempoPreparo">Tempo de Preparo</label><br>
    <input type="TempoPreparo" step="0.01" name="TempoPreparo" id="TempoPreparo" value="<?php echo $receitas['TempoPreparo']?? "";?>"><br>

     <br>
    <button type="submit">Cadastrar</button>

    

</form>
    
</body>
</html>