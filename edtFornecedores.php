<?php 
    include 'conexao.php';

    $cod = trim($_POST['txt_Cod']); 
    $descricao = trim($_POST['txt_Descricao']); 
    $endereco = trim($_POST['txt_Endereco']);
    $telefone = trim($_POST['txt_Telefone']); 
    $cidade = trim($_POST['txt_Cidade']);
    $uf = trim($_POST['txt_Uf']);
    $cnpj = trim($_POST['txt_Cnpj']);


    if (!empty($cod) && !empty($descricao) && !empty($endereco) && !empty($telefone) && !empty($cidade) && !empty($uf) && !empty($cnpj)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE fornecedores SET descricao=?, endereco=?,telefone=?,cidade=?,uf=?,cnpj=? WHERE cod=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao, $endereco, $telefone, $cidade, $uf, $cnpj, $cod));
        Conexao::desconectar(); 
    }
    header("location:formEdtFornecedores.php");
    
    ?> 