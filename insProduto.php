<?php
    include 'conexao.php';

    $codigo = trim($_POST['frmCodigo']);
    $descricao = trim($_POST['frmDescricao']);
    $preco = trim($_POST['frmPreco']);
    $estoque = trim($_POST['frmEstoque']);

    $pdo = Conexao::conectar();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO produto (codigo, descricao, preco, estoque) VALUES (?, ?, ?, ?);";
    $query = $pdo->prepare($sql);
    $query->execute(array($codigo, $descricao, $preco, $estoque));
    
    Conexao::desconectar();
    header("location: cadastroProdutos.php");
?>