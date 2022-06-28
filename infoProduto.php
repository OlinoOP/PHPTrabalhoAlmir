<?php 
   $cod = $_GET['cod']; 

   include 'conexao.php';
   $sql = "select * from produtos where cod=?;";
   $pdo = Conexao::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($cod));
   $produto = $query->fetch(PDO::FETCH_ASSOC);

   $sql = "select * from fornecedores where cod=?;";
   $query = $pdo->prepare($sql);
   $query->execute (array($produto['codfor']));
   $fornecedor = $query->fetch(PDO::FETCH_ASSOC);

   $sql = "select * from categorias where cod=?;";
   $query = $pdo->prepare($sql);
   $query->execute (array($produto['codcat']));
   $categoria = $query->fetch(PDO::FETCH_ASSOC);

   Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <!-- Configuração dos ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Detalhes do Produto</title>
</head>

<body>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Detalhes do Produto</h1>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblCod" class="white-text">
                            <h5><b>Cod: </b><?php echo $produto['cod'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lbldescricao" class="white-text">
                            <h5><b>Descricao: </b><?php echo $produto['descricao'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblestoqueatual" class="white-text">
                            <h5><b>Estoque atual: </b><?php echo $produto['estoqueatual'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblestoquemin" class="white-text">
                            <h5><b>Estoque minimo: </b><?php echo $produto['estoquemin'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblestoquemax" class="white-text">
                            <h5><b>Estoque Maximo: </b><?php echo $produto['estoquemax'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblValor" class="white-text">
                            <h5><b>Valor unitario: </b><?php echo $produto['valorunitario'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblfornecedordescricao" class="white-text">
                            <h5><b>Descricao Fornecedor: </b><?php echo $fornecedor['descricao'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblfornecedorendereco" class="white-text">
                            <h5><b>Endereco Fornecedor: </b><?php echo $fornecedor['endereco'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblfornecedortel" class="white-text">
                            <h5><b>Telefone Fornecedor: </b><?php echo $fornecedor['telefone'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblcategoria" class="white-text">
                            <h5><b>Categoria Produto: </b><?php echo $categoria['descricao'];?></h5>
                        </label>
                    </div>
                </div>
                <br />
                <br />
                
            </div>
            <div class="grey darken-2 col s12 center">
                    <div class="input-field">
                        <a class="waves-effect waves-light btn green"
                            onclick="JavaScript:location.href='addProdutos.php'">
                            <i class="material-icons right">add</i>Novo</a>

                        <a class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='formEdtProdutos.php?cod=' + 
                           <?php echo $produto['cod'];?>">
                            <i class="material-icons right">edit</i>Editar</a>

                        <a class="waves-effect waves-light btn red"
                            onclick="JavaScript:remover(<?php echo $produto['cod'];?>)">
                            <i class="material-icons right">delete</i>Remover</a>

                        <a class="waves-effect waves-light btn blue" onclick="JavaScript:location.href='getProdutos.php'">
                            <i class="material-icons right">list</i>Listar</a>
                    </div>
                </div>

        </div>
    </div>

    <br>
    <br>
</body>

</html>

<script>
function remover(id) {
    if (confirm('Excluir o produto ' + id + '?')) {
        location.href = 'deleteProduto.php?id=' + id;
    }
}
</script>