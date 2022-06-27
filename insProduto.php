<?php 
    include 'conexao.php'; 

    $descricao = trim($_POST['txt_Descricao']); 
    $codfor = trim($_POST['txt_Fornecedor']);
    $codcat = trim($_POST['txt_Categoria']); 
    $etqatual = trim($_POST['txt_EtqAtual']);
    $etqminimo = trim($_POST['txt_EtqMinimo']);
    $etqmaximo = trim($_POST['txt_EtqMaximo']);
    $valorunitario = trim($_POST['txt_ValorUnitario']);

    if (!empty($descricao) && !empty($codfor) && !empty($codcat) && !empty($etqatual) && !empty($etqminimo) && !empty($etqmaximo) && !empty($valorunitario)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO produtos(descricao, codfor, codcat, estoqueatual, estoquemin, estoquemax, valorunitario) VALUES (?,?,?,?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao, $codfor, $codcat, $etqatual, $etqminimo, $etqmaximo, $valorunitario));
        Conexao::desconectar(); 
    }
    header("location:addProdutos.php"); 
?> 