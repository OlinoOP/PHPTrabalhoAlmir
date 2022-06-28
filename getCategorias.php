<?php
    include 'menu.php'; 
   include 'conexao.php';
   $pdo = Conexao::conectar(); 
   $sql = "select * from categorias order by descricao;";
   $listCategorias = $pdo->query($sql); 
   Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Categorias</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <!-- Configuração dos ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body style="background-color: gray;">
    
    <div class="container white">
        <div class="light-blue darken2 row center">
        <h1 >Listar Categorias</h1>
        </div>
        <table class="striped">
            <tr>
                <th>Cod</th>
                <th>Descricao</th>
                <th class="center" >Funções</th>
                <th>
                    <a class="btn-floating btn-small waves-effect waves-light green"
                        onclick="JavaScript:location.href='addCategorias.php'">
                        <i class="material-icons">add</i>
                    </a>
                </th>
            </tr>

            <?php 
           foreach($listCategorias as $categoria){
        ?>
            <tr>
                <td><?php echo $categoria['cod']?></td>
                <td><?php echo $categoria['descricao']?></td>
                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdtCategorias.php?cod=' + 
                           <?php echo $categoria['cod'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:remover(<?php echo $categoria['cod'];?>)">
                        <i class="material-icons">delete</i>
                    </a>
                </td>
                <td></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>

<script>
function remover(id) {
    if (confirm('Excluir a categoria ' + id + '?')) {
        location.href = 'deleteCategoria.php?id=' + id;
    }
}
</script>