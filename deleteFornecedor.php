<?php

    $cod = trim($_GET['id']); 
   
   include 'conexao.php';
    if (!empty($cod) ){
        $sql = "DELETE from fornecedores WHERE cod=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($cod));
        Conexao::desconectar(); 
    }

    header("location:getFornecedores.php"); 

?>