<?php
   include 'menu.php'; 
   include 'conexao.php';
   $pdo = Conexao::conectar(); 
   $sql = "select * from fornecedores order by descricao;";
   $listFornecedores = $pdo->query($sql); 
   Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Fornecedores</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <!-- Configuração dos ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body style="background-color: gray;">
    
    <div class="container white">
        <div class="light-blue darken-2 row center"> <h1 >Listar Fornecedores</h1></div>
        <div class="row">
        <table class="striped">
            <tr>
                <th>Cod</th>
                <th>Descricao</th>
                <th>Endereco</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>CNPJ</th>
                <th class="center">Funções</th>
                <th>
                    <a class="btn-floating btn-small waves-effect waves-light green"
                        onclick="JavaScript:location.href='addFornecedores.php'">
                        <i class="material-icons">add</i>
                    </a>
                </th>
            </tr>

            <?php 
           foreach($listFornecedores as $fornecedor){
        ?>
            <tr>
                <td><?php echo $fornecedor['cod']?></td>
                <td><?php echo $fornecedor['descricao']?></td>
                <td><?php echo $fornecedor['endereco']?></td>
                <td><?php echo $fornecedor['telefone']?></td>
                <td><?php echo $fornecedor['cidade']?></td>
                <td><?php echo $fornecedor['uf']?></td>
                <td><?php echo $fornecedor['cnpj']?></td>
                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdtFornecedores.php?cod=' + 
                           <?php echo $fornecedor['cod'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:remover(<?php echo $fornecedor['cod'];?>)">
                        <i class="material-icons">delete</i>
                    </a>

                </td>
                <td></td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </div>
</body>
</html>

<script>
function remover(id) {
    if (confirm('Excluir o fornecedor ' + id + '?')) {
        location.href = 'deleteFornecedor.php?id=' + id;
    }
}
</script>