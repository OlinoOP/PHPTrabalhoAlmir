<?php 
    include 'conexao.php';

    $cod = trim($_POST['txt_Cod']); 
    $descricao = trim($_POST['txt_Descricao']); 
    $codfor = trim($_POST['txt_codfor']);
    $codcat = trim($_POST['txt_codcat']); 
    $estoqueatual = trim($_POST['txt_etq']);
    $estoquemin = trim($_POST['txt_min']);
    $estoquemax = trim($_POST['txt_max']);
    $valorunitario = trim($_POST['txt_valorunitario']);


    if (!empty($cod) && !empty($descricao) && !empty($codfor) && !empty($codcat) && !empty($estoqueatual) && !empty($estoquemin) && !empty($estoquemax) && !empty($valorunitario)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE produtos SET descricao=?,codfor=?,codcat=?,estoqueatual=?,estoquemin=?, estoquemax=?, valorunitario=?  WHERE cod=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao, $codfor, $codcat, $estoqueatual, $estoquemin, $estoquemax, $valorunitario, $cod));
        Conexao::desconectar(); 
    }
    header("location:formEdtProdutos.php");
    
    ?> 