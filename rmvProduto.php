<?php
    $codigo = trim($_POST['frmCodigo']);

    include 'conexao.php';
    
    $pdo = Conexao::conectar();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM produto WHERE codigo=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($codigo));

    Conexao::desconectar();
    header("location: cadastroProdutos.php");
?>