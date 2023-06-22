
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>

    <div class="container">
        <h1>receitas</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">Inserir Receita</a>
        </div>

        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Ingredientes</th>
                    <th scope="col">modoPreparo</th>
                    <th scope="col">tempo (min)</th>
                    <th scope="col">ações</th>
                </tr>
            </thead>
            <body>
                <?php foreach ($receitas as $receita) { ?>
                    <tr>
                        <th scope="row"><?php echo $receita['Nome'] ?></th>
                        <td><?php echo $receita['Ingredientes'] ?></td>
                         <td><?php echo $receita['ModoPreparo'] ?></td> 
                         <td><?php echo $receita['TempoPreparo'] ?></td>
                          
                        
                        <td>
                            <a href="excluir.php?ID=<?php echo $receita['ID'];?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
                            <a href="form.php?ID=<?php echo $receita['ID'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
                        </td>
                    </tr>
                <?php } ?>
            </body>
        </table>
    </div>
    <?php require_once "../template/rodape.php" ?>
