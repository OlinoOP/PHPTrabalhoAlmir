<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Categorias</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Configuração dos ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Inserir Categorias</h1>
        </div>
        <div class="row">
            <form action="insCategoria.php" method="POST" id="frmInsImov" name="frmInsImov" class="col s12">
                <div class="input-field col s8">
                    <label for="lblDesc" class="black-text bold">Informe a Descricao:</label>
                    <input id="txt_descricao"  name="txt_Descricao" type="text">
                </div>
                <div class="grey darken-2 center col s12">
                   <br/>
                   <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Gravar
                       <i class="material-icons right">save</i>
                   </button>
                   <button class="btn waves-effect waves-light red" type="reset" name="btnLimpar">Limpar
                       <i class="material-icons right">clear_all</i>
                   </button>
                   <button class="btn waves-effect waves-light blue" type="button" name="btnVoltar"
                   onclick="JavaScript:location.href='getCategorias.php'">Voltar
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