<?php 
include 'menu.php'; 
    $cod = $_GET['cod'];

    include 'conexao.php';
    $pdo = Conexao::conectar(); 
    $sql = "select * from produtos where cod=?;";
    $query = $pdo->prepare($sql);
    $query->execute (array($cod));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

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

    <title>Editar Fornecedores</title>
</head>

<body style="background-color: gray;">
    <div class="container light-blue darken-2 black-text col s12">
        <div class="center black white-text col s12">
            <h1>Editar Fornecedores</h1>
        </div>
        <div class="row">
            <form action="edtProdutos.php" method="POST" id="frmEdtFor"  class="col s12">
                <div class="input-field col s8">
                  <h3><label for="lblCod" class="black-text bold"><b>Cod:  <?php echo $cod;?> </b></label> </h3>
                  <input type="hidden" name="txt_Cod" id="cod" value="<?php echo $cod;?>">
                </div>
                <div class="input-field col s8">
                    <label for="lblDescricao" class="black-text bold">Descricao:</label>
                    <input type="text" class="form-control"  id="txt_descricao"  name="txt_Descricao" value="<?php echo $dados['descricao'];?>" >
                </div>
                <div class="input-field col s8">
                    <label for="lblcodfor" class="black-text bold">Codigo Fornecedor:</label>
                <input id="txt_codfor" name = "txt_codfor" value="<?php echo $dados['codfor'];?>" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblcodcat" class="black-text bold">Codigo Categoria:</label>
                    <input id="txt_codcat" name ="txt_codcat" value="<?php echo $dados['codcat'];?>" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblEtq" class="black-text bold">Estoque Atual:</label>
                    <input id="txt_etq" name="txt_etq" value="<?php echo $dados['estoqueatual'];?>" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblmin" class="black-text bold">Estoque Minimo:</label>
                    <input id="txt_min" name="txt_min" value="<?php echo $dados['estoquemin'];?>" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblmax" class="black-text bold">Estoque Maximo:</label>
                    <input id="txt_max" name="txt_max" value="<?php echo $dados['estoquemax'];?>" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblvalorunitario" class="black-text bold">Valor Unitario:</label>
                    <input id="txt_valorunitario" name="txt_valorunitario" value="<?php echo $dados['valorunitario'];?>" type="number">
                </div>
                <div class="grey darken-4 center col s12">
                   <br/>
                   <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Gravar
                       <i class="material-icons right">save</i>
                   </button>
                   <button class="btn waves-effect waves-light red" type="reset" name="btnLimpar">Limpar
                       <i class="material-icons right">clear_all</i>
                   </button>
                   <button class="btn waves-effect waves-light blue" type="button" name="btnVoltar"
                   onclick="JavaScript:location.href='getProdutos.php'">Voltar
                       <i class="material-icons right">arrow_back</i>
                   </button>     
                   <br/>
                   <br/>
                </div>
            </form>
        </div>     
    </div>
    <br>
    <br>
</body>
</html>