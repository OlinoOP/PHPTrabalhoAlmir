<?php 
    include 'conexao.php'; 

    $descricao = trim($_POST['txt_Descricao']); 
    $endereco = trim($_POST['txt_Endereco']);
    $telefone = trim($_POST['txt_Telefone']); 
    $cidade = trim($_POST['txt_Cidade']);
    $uf = trim($_POST['txt_Uf']);
    $cnpj = trim($_POST['txt_Cnpj']);

    if (!empty($descricao) && !empty($endereco) && !empty($cidade) && !empty($telefone) && !empty($uf) && !empty($cnpj)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO fornecedores(descricao, endereco, telefone, cidade, uf, cnpj) VALUES (?,?,?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao, $endereco, $telefone, $cidade, $uf, $cnpj));
        Conexao::desconectar(); 
    }
    header("location:addFornecedores.php"); 
?> 