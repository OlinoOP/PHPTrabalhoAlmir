<?php
include 'menu.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produtos</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Configuração dos ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: gray;">
    <div class="container light-blue darken-2 black-text col s12">
        <div class="center black white-text col s12">
            <h1>Inserir Produtos</h1>
        </div>
        <div class="row">
            <form action="insProduto.php" method="POST" id="frmInsImov" name="frmInsImov" class="col s12">
                <div class="input-field col s8">
                    <label for="lblDesc" class="black-text bold">Informe a Descricao:</label>
                    <input id="txt_descricao"  name="txt_Descricao" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblFornecedor" class="black-text bold">Cod Fornecedor</label>
                    <input id="txt_Fornecedor" name = "txt_Fornecedor" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblCategoria" class="black-text bold">Cod Categoria:</label>
                    <input id="txt_categoria" name ="txt_Categoria" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblEstoqueAtual" class="black-text bold">Estoque Atual:</label>
                    <input id="txt_etqatual" name="txt_EtqAtual" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblEstoqueMinimo" class="black-text bold">Estoque Minimo:</label>
                    <input id="txt_etqminimo" name="txt_EtqMinimo" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblEstoqueMaximo" class="black-text bold">Estoque Maximo:</label>
                    <input id="txt_etqmaximo" name="txt_EtqMaximo" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblValorUnitario" class="black-text bold">Valor Unitario:</label>
                    <input id="txt_valorunitario" name="txt_ValorUnitario" type="number">
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
</body>
</html>