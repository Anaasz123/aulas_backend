<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php"; ?>


<div class="container">
    <h1>Cadastro de Usuário</h1>
    <hr>

  

  <form 
   action="<?php echo isset($usuario) ? 'atualizar.php' : 'inserir.php' ?>"
   method="post"
   enctype="multipart/form-data"
   >

    <label for="nome" class="form-label">Nome</label><br>
    <input class="form-control" name="nome" id="nome" value="<?php echo $usuario['nome']?? "";?>"><br>
    <input type="hidden" name="id" id="id" value="<?php echo $usuario['idusuario']?? "";?>"><br>


    <label for="login" class="form-label">Login</label><br>
    <input class="form-control" name="login" value= "<?php echo $usuario['login']?? "";?>"><br>

    <label for="senha" class="form-label">Senha</label><br>
    <input class="form-control"  name="senha" id="senha" value="<?php echo $usuario['senha']?? "";?>"><br>

    <label for="foto" class="form-label">Foto</label><br>
    <input class="form-control" name="foto" id="foto"><br>

     <br>
    <button type="submit" class="btn btn-primary">Cadastrar</button>

    

</form>
</div>
<?php require_once "../template/rodape.php" ?>