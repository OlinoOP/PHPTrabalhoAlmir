<?php 
    include 'conexao.php';

    $cod = trim($_POST['txt_Cod']); 
    $descricao = trim($_POST['txt_Descricao']);


    if (!empty($cod) && !empty($descricao)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE categorias SET descricao=? WHERE cod=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao, $cod));
        Conexao::desconectar(); 
    }
    header("location:formEdtCategorias.php");
    
    ?> 