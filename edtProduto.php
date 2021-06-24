<?php
    include 'conexao.php';

    $codigo = trim($_POST['frmCodigo']);
    $descricao = trim($_POST['frmDescricao']);
    $preco = trim($_POST['frmPreco']);
    $estoque = trim($_POST['frmEstoque']);

    $pdo = Conexao::conectar();
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE produto SET descricao=?, preco=?, estoque=? WHERE codigo=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($descricao, $preco, $estoque, $codigo));
    
    Conexao::desconectar();

    header("location: cadastroProdutos.php");
?>