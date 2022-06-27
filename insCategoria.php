<?php 
    include 'conexao.php'; 

    $descricao = trim($_POST['txt_Descricao']);

    if (!empty($descricao)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO categorias(descricao) VALUES (?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao));
        Conexao::desconectar();
    }
    header("location:addCategorias.php"); 
?> 