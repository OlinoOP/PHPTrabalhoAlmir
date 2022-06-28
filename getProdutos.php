<?php
   include 'conexao.php';
   $pdo = Conexao::conectar(); 
   $sql = "select * from produtos order by descricao;";
   $listProdutos = $pdo->query($sql); 
   Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Produtos</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <!-- Configuração dos ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div class="container ">
        <h1 class="light-green lighten-4">Listar Produtos</h1>
        <table class="striped">
            <tr>
                <th>Cod</th>
                <th>Descricao</th>
                <th>Cod Fornecedor</th>
                <th>Cod Categoria</th>
                <th>Estoque Atual</th>
                <th>Estoque Minimo</th>
                <th>Estoque Maximo</th>
                <th>Valor Unitario</th>
                <th class="center">Funções</th>
                <th>
                    <a class="btn-floating btn-small waves-effect waves-light green"
                        onclick="JavaScript:location.href='addProdutos.php'">
                        <i class="material-icons">add</i>
                    </a>
                </th>
            </tr>

            <?php 
           foreach($listProdutos as $produto){
        ?>
            <tr>
                <td><?php echo $produto['cod']?></td>
                <td><?php echo $produto['descricao']?></td>
                <td><?php echo $produto['codfor']?></td>
                <td><?php echo $produto['codcat']?></td>
                <td><?php echo $produto['estoqueatual']?></td>
                <td><?php echo $produto['estoquemin']?></td>
                <td><?php echo $produto['estoquemax']?></td>
                <td><?php echo $produto['valorunitario']?></td>
                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdtProdutos.php?cod=' + 
                           <?php echo $produto['cod'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:remover(<?php echo $produto['cod'];?>)">
                        <i class="material-icons">delete</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light light-blue darken-3" onclick="JavaScript:location.href='infoProduto.php?cod=' + 
                           <?php echo $produto['cod'];?>">
                        <i class="material-icons">info</i>
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
    if (confirm('Excluir o produto ' + id + '?')) {
        location.href = 'deleteProduto.php?id=' + id;
    }
}
</script>